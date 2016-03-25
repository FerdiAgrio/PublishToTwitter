# PublishToTwitter
<span itemprop="name">Processwire 2.x module to Tweet pages</span>
------------

<p itemprop="description">A complete module for tweeting pages with link and (optional) image.<br />Uses the Twitter credentials of your app (https://apps.twitter.com).<br />Optional use of Bit.ly (needs credentials) to shorten URL length.</p>

Uses (included) [TwitterOAuth PHP library](https://github.com/abraham/twitteroauth) written by [abraham](https://github.com/abraham).


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
