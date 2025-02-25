<?php
/*
 * Generated configuration file
 * Generated by: phpMyAdmin 3.2.5 setup script by Piotr Przybylski <piotrprz@gmail.com>
 * Date: Sun, 21 Feb 2010 12:43:50 +0100
 */

/* Servers configuration */
$i = 0;

/* Server: localhost [1] */
$i++;
$cfg['Servers'][$i]['verbose'] = 'localhost';
$cfg['Servers'][$i]['host'] = '127.0.0.1';
$cfg['Servers'][$i]['port'] = '';
$cfg['Servers'][$i]['socket'] = '';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = '';
$cfg['Servers'][$i]['nopassword'] = true;

$cfg['Servers'][$i]['AllowNoPassword']      = true;
$cfg['Servers'][$i]['pmadb']            = 'phpmyadmin';
$cfg['Servers'][$i]['bookmarktable']    = 'pma_bookmark';
$cfg['Servers'][$i]['relation']         = 'pma_relation';
$cfg['Servers'][$i]['table_info']       = 'pma_table_info';
$cfg['Servers'][$i]['table_coords']     = 'pma_table_coords';
$cfg['Servers'][$i]['pdf_pages']        = 'pma_pdf_pages';
$cfg['Servers'][$i]['column_info']      = 'pma_column_info';
$cfg['Servers'][$i]['history']          = 'pma_history';
$cfg['Servers'][$i]['designer_coords']  = 'pma_designer_coords';
$cfg['Servers'][$i]['tracking'] 		= 'pma_tracking';




/* End of servers configuration */

$cfg['blowfish_secret']  = 'noFb57s3pq83MQVUDh9D2YLve1r8kUL2Bs27q32uBekGEzD33iTYs757G2nMt7n8';
$cfg['DefaultLang'] = 'en-utf-8';
$cfg['ServerDefault'] = 1;
$cfg['UploadDir'] = './tmp/';
$cfg['SaveDir'] = './tmp/';
$cfg['CheckConfigurationPermissions'] = false;
$cfg['AllowUserDropDatabase'] = true;


$cfg['MySQLManualBase'] = 'http://dev.mysql.com/doc/refman/5.1/en';
$cfg['MySQLManualType'] = 'searchable';

?>