# chick chick BOOM Website Archive
A WIP archive of the current Flash Player chick chick BOOM website.

Looking for the WiiWare version? Check out the [MarioCube repository](https://mariocube.com/)!

## Missing Files
If a file is listed here, it means it's either not on the website or not on `archive.org`.
* `ccb_screenshots.zip`
* `ccb_artworks.zip`
* MiS: Indie Games rewards (those are on my Indie Games mirror, available [here](https://snowdriftindie.jbmagination.com/) under the full version!)

## Custom Additions
* `index.html` This will allow the game to actually... y'know, run. The `index.php` would work but it uses *severely* outdated PHP functions.
* `otherfiles/` is a folder with things that I think should be archived here, but aren't actually used currently by the website.
* You might see `vercel.json` every now and then. This, if it works, will/would be used by Vercel to run the PHP files.

## Progress
The site itself should be fully functional and working. However, the main problem is getting the site to actually work without being hosted locally.

* You see, I used to use GitHub Pages for this-- and then I needed PHP
* So then I tried [Vercel](https://vercel.com), which is used on [@Minerscale](https://github.com/minerscale)'s [Mission in Snowdriftland mirror](https://snowdriftland.live)-- and then quickly realized Vercel didn't actually support PHP
* That's when I found [Vercel PHP](https://github.com/juicyfx/vercel-php)
* And it doesn't seem to work with the archive when set up, due to my lack of understanding for `vercel.json`
