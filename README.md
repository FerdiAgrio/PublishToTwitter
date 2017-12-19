# PublishToTwitter
<span itemprop="name">Processwire 3.x module to Tweet pages</span>
------------

<p itemprop="description">In short this module offers an option to publish a page to Twitter when the date for publishing is past/scheduled.</p>


<p>After filling out the Twitter credentials, select your preferable template(s) which should have the option added to Tweet the pages using it. Additional select the field to use as publicationdate to check if the Tweet should be send now or later, a field which contains the page title.</p>


<p>Optional you can fill out the name of the website which will be added after the title (in case space is available).</p>

<p>Optional you can select the field where the page image(s) are placed (up to four can be tweeted, but mind the upload time).</p>

<p>v1.0.2 Removed use of Bit.ly</p>

<p>Includes instructions to set a cron (template or LazyCron), returns log in assets folder.</p>


<p>Uses (included) TwitterOAuth PHP library (https://github.com/abraham/twitteroauth) written by [abraham](https://github.com/abraham).</p>


To use the module combined with a cron, the following code can be used in a template.

// when using LazyCron

if ($this->cronInterval) {
    $this->addHook("LazyCron::{$this->cronInterval}", null, 'RunCronPublishToTwitter');
} else {
    if (date('G') > 7 && date('G') < 23) {
        $this->addHook('LazyCron::every5Minutes', null, 'RunCronPublishToTwitter');
    } else {
        $this->addHook('LazyCron::every6Hours', null, 'RunCronPublishToTwitter');
    }
}


// OR - for use in manual cron

$ptt = wire("modules")->get("PublishToTwitter");
$ptt->RunCronPublishToTwitter();

Check out the [Processwire modules section](http://modules.processwire.com/modules/publish-to-twitter/) for more details.