<?php
$T_LOGIN="";
  $LOGIN_ID      ="id"
  $LOGIN_USERNAME="username";
  $LOGIN_PASSWORD="password";
  $LOGIN_EMAIL   ="email";
  $LOGIN_REG_TIME="registrationtime";
  //id id_autoincrement not null
  //varchar
  //varchar md5()
  //varchar
  //timestamp
$T_BANDS=""
  $BANDS_ID     ="id";
  $BANDS_NAME   ="name";
  $BANDS_ACTIVE ="active";
  //id_autoincrement not null
  //varchar
  //boolean
$T_ALBUMS="";
  $ALBUMS_ID      ="id";
  $ALBUMS_NAME    ="name";
  $ALBUMS_BANDS   ="IdBandsFk";
  //id id_autoincrement not null
  //varchar
  //foreign key bands
$T_COMPOSERS=""
  $COMPOSERS_ID   ="id";
  $COMPOSERS_NAME ="name";
  //id id_autoincrement not null
  //varchar
$T_MUSIC="";
  $MUSIC_ID           ="id";
  $MUSIC_NAME         ="name";
  $MUSIC_DURATION     ="timing";
  $MUSICCOMPOSERS     ="IdComposersFk";
  $MUSICALBUMS        ="IdAlbumsFk";
  //id id_autoincrement not null
  //varchar
  //time or milliseconds
  //foreign key composers
  //foreign key albums
