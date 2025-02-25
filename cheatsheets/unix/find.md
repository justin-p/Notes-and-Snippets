# find

[source](https://devhints.io/find)

### Usage

```bash
find <path> <conditions> <actions>
```

### Conditions

```bash
-name "*.c"
```

```bash
-user jonathan
-nouser
```

```bash
-type f            # File
-type d            # Directory
-type l            # Symlink
```

```bash
-depth 2           # At least 3 levels deep
-regex PATTERN
```

```bash
-size 8            # Exactly 8 512-bit blocks 
-size -128c        # Smaller than 128 bytes
-size 1440k        # Exactly 1440KiB
-size +10M         # Larger than 10MiB
-size +2G          # Larger than 2GiB
```

```bash
-newer   file.txt
-newerm  file.txt        # modified newer than file.txt
-newerX  file.txt        # [c]hange, [m]odified, [B]create
-newerXt "1 hour ago"    # [t]imestamp
```

### Condition flow

```bash
\! -name "*.c"
\( x -or y \)
```

### Actions

```bash
-exec rm {} \;
-print
-delete
```

### Examples

```bash
find . -name '*.jpg'
find . -name '*.jpg' -exec rm {} \;
```

```bash
find . -newerBt "24 hours ago"
```

## Example 1

In the current folder, find files that are readable, executable have a size of 1033 bytes, then send the files found over to cat.

```bash
find . -type f -readable ! -executable -size 1033c -exec cat {} \;
```

## Example 2

In the current folder, find everything that has a size of 33 bytes, is owned by group bandit6 and user bandit7, redirect errors to /dev/null and send the stuff found over to cat.

```bash
find . -size 33c -group bandit6 -user bandit7 2> /dev/null -exec cat {} \;
```

