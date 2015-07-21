<?php

$users = array(
	"RpBdan629paxton" => "RpDaph+1428*"
);
//add users in the users array. keys are usernames, values are twice sha256'd passwords.

$checkudids = TRUE;
//if this is set to yes, errrr will check users against specified udids in $udids

$udids = array(
"RpBdan629paxton" => array("fbc41eeaf92c2c640f037d6aad2fa63aefdad6db")
);
//add the same username as well as their udid(s) once sha256'd in an array (in order to support multiple devices)

$uniquepackages = FALSE;
//if set to TRUE, errrr will look for (packagename).(username),
//for example if goeo_ is trying to download pink.goeo.internetfriends_0.1-1_iphoneos-arm.deb, he'll get pink.goeo.internetfriends_0.1-1_iphoneos-arm.deb.goeo_
//this is for extreme DRMs that require unique packages for every user.
?>
