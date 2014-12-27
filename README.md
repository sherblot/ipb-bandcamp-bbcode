# Bandcamp BBCode for Invision Power Board (IPB) v3.4+

Bandcamp's embed code of Bandcamp is using the album or the track ID. This ID is not available in the URL so creating a custom BBCode within the default IPB system is tricky and not very convenient for the users. Here is a small 1-file plugin that does the trick very easily.

## Current limitation

To avoid to have multiple player's styles, I chose to force the style to a small one so all the style options you or your members might use will be ignored.

## How to install this plugin?

###Step 1: Uploading the plugin file
**v3.4+**

Upload the ```bandcamp.php``` file to your FTP server at this location: ```ROOT/admin/sources/classes/text/parser/bbcode```. 

**Versions before 3.4 (not tested as I don't have these versions available)**

Upload the ```legacy/bandcamp.php``` file to your FTP server at this location: ```ROOT/admin/sources/classes/bbcode/custom```. 

###Step 2: Add a new Custom BBCode

Go to the PC Admin panel > Post Content > BBCode Management > Add BBCode.

- **Custom BBCode**: bandcamp
- **Custom BBCode Description**: BBCode to embed Bandcamp player to your post
- **Custom BBCode Tag**: bandcamp
- **Use Single Tag Only**: Yes
- **OR PHP file to execute**: bandcamp.php

Hit "Add BBCode" and it's done.

## How to use?

That's pretty simple. On your Bandcamp page for a track or an album, click on the "Share / Embed" link, then choose any style (will be ignored as explained above). Now click on the "wordpress.com" button and copy/paste the BBCode into your message.

## Documentation

[Custom BBCode Plugins]:https://www.invisionpower.com/support/guides/_/advanced-and-developers/api-methods/custom-bbcode-plugins-r47