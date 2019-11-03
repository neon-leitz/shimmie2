<?php

class LinkImageInfo extends ExtensionInfo
{
    public const KEY = "link_image";

    public $key = self::KEY;
    public $name = "Link to Image";
    public $authors = ["Artanis"=>"artanis.00@gmail.com"];
    public $description = "Show various forms of link to each image, for copy & paste";
    public $license = self::LICENSE_GPLV2;
    public $documentation = "There is one option in Board Config: Text Link Format.
It takes the following arguments as well as plain text.

<pre>
|| arguments    || replacement                      ||
|| \$id          || The image ID.                    ||
|| \$hash        || The MD5 hash of the image.       ||
|| \$tags        || The image's tag list.            ||
|| \$base        || The base HREF as set in Config.  ||
|| \$ext         || The image's extension.           ||
|| \$size        || The image's display size.        ||
|| \$filesize    || The image's size in KB.          ||
|| \$filename    || The image's original filename.   ||
|| \$title       || The site title as set in Config. ||
</pre>

<p>Link to Image will default this option to '\$title - \$id (\$ext \$size \$filesize)'.

<p>To reset to the default, simply clear the current setting. Link to Image
will then fill in the default value after the save.

<p>To leave the setting blank for any reason, leave a space (' ') in it.";
}
