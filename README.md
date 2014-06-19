## Cache clear

![cache clear](https://s3-us-west-1.amazonaws.com/themccallister.com/cache-clear.png)

Cache clear is a plugin written for Craft that allows you to post to a specific URL (with a unique key) to automatically clear your website caches. This is incredibly useful when working in a Git deployment environment.

#### Install...

1. Move **cacheclear** to your **plugins** directory.
2. Install in your control panel at **admin/settings/plugins**.
3. Configure your **unique key** (_Note: make sure you keep this private, unless you like random people clearing your website caches... Who knows, maybe you live on the wild side?_)
4. Copy the URL from **admin/settings/plugins/cacheclear** and visit in your browser. Alternatively, you can create a Craft template with the provided code.
5. **Git tricky with it!** Setup a Git hook to automatically hit that URL after every push to automate cache clears! The rest is up to you!

#### Special thank you!

Before I say anything else, this plugin is inspired by [Ben Croker's](http://www.putyourlightson.net) plugin [Dump](https://github.com/putyourlightson/Craft-Dump). To clarify what I mean by "inspired" - it is an almost exact copy.. I just spent my time determining how to create an action that would clear the caches.

However, I **did** check with Ben before releasing this to make sure it was ok... In other words - love your fellow developers and show respect where its due!
