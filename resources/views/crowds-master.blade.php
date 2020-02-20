<!--

THE WISDOM AND/OR MADNESS OF CROWDS
by Nicky Case | apr 2018

- - - - - - - - - - -

FAN TRANSLATION GUIDE:
https://github.com/ncase/crowds#how-to-translate-this-thing

Hello fan-translaters! Thank you so, so much for your help.
I hope you know what you've gotten yourself into.
There's about 3600+ WORDS to translate, including
the Bonus Boxes and References.

To make things easier (or less painful, anyway) I've marked
what needs to be translated and how with big "TRANSLATE" comments.
Ctrl+F for "TRANSLATE" in uppercase to see what needs to be translated!

BUT BEFORE YOU TRANSLATE ANYTHING, DO THIS:
1) Look up the two-letter code of the language you're translating to:
   https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
2) *COPY* index.html, and name the copy [two-letter-code].html
   For example: de.html, ar.html, zh.html, etc...
3) Translate *THAT* page. Do NOT modify the original index.html!

And once you're done, go to "translations.txt", and follow the
instructions there to let this game "know" your translation exists.

Good luck, and thanks again!

<3,
~ Nicky Case

-->

<!DOCTYPE html>
<html lang="en"> <!-- lang="(TRANSLATE: set your language code here, same as the page name!) e.g: es, es-ES, pt-BR, ja, it, fr-CA, de, ..." -->
<head>

	<!-- Meta Info -->
	<title>دانایی و/‌یا دیوانگی مردم</title> <!-- <title>(TRANSLATE this part only)</title> -->
	<meta name="description" content="an interactive guide to human networks"/> <!-- content="(TRANSLATE this part only)" -->
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="{{url('favicon.png')}}">

	<link rel="alternate" href="http://ncase.me/crowds/"           hreflang="en">
	<link rel="alternate" href="http://ncase.me/crowds/cs.html"    hreflang="cs">
	<link rel="alternate" href="http://ncase.me/crowds/de.html"    hreflang="de">
	<link rel="alternate" href="http://ncase.me/crowds/es.html"    hreflang="es-ES">
	<link rel="alternate" href="http://ncase.me/crowds/fr.html"    hreflang="fr">
	<link rel="alternate" href="http://ncase.me/crowds/it.html"    hreflang="it">
	<link rel="alternate" href="http://ncase.me/crowds/ja.html"    hreflang="ja">
	<link rel="alternate" href="http://ncase.me/crowds/pt.html"    hreflang="pt">
	<link rel="alternate" href="http://ncase.me/crowds/ru.html"    hreflang="ru">
	<link rel="alternate" href="http://ncase.me/crowds/uk.html"    hreflang="uk">
	<link rel="alternate" href="http://ncase.me/crowds/vi.html"    hreflang="vi">
	<link rel="alternate" href="http://ncase.me/crowds/zh-CN.html" hreflang="zh-CN">
	<link rel="alternate" href="http://ncase.me/crowds/zh-TW.html" hreflang="zh-TW">

	<!-- Sharing -->
	<meta itemprop="name" content="دانایی و/‌یا دیوانگی مردم"> <!-- content="(TRANSLATE this part only)" -->
	<meta itemprop="description" content="یک راهنمای تعاملی برای شبکه های انسانی"> <!-- content="(TRANSLATE this part only)" -->
	<meta itemprop="image" content="http://ncase.me/crowds/social/thumb.png">

	<meta name="twitter:title" content="The Wisdom and/or Madness of Crowds"> <!-- content="(TRANSLATE this part only)" -->
	<meta name="twitter:description" content="an interactive guide to human networks"> <!-- content="(TRANSLATE this part only)" -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@ncasenmare">
	<meta name="twitter:creator" content="@ncasenmare">
	<meta name="twitter:image" content="http://ncase.me/crowds/social/thumb.png">

	<meta property="og:title" content="The Wisdom and/or Madness of Crowds"> <!-- content="(TRANSLATE this part only)" -->
	<meta property="og:description" content="an interactive guide to human networks"> <!-- content="(TRANSLATE this part only)" -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://ncase.me/crowds/">
	<meta property="og:image" content="http://ncase.me/crowds/social/thumb.png">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{url('css/crowds-master.css?v=7')}}">

</head>
<body>

<!-- THE SLIDESHOW -->
<div id="container" style="direction: rtl;">

	<!-- Simulation(s) in background -->
	<div id="simulations_container">
		<div id="simulations"></div>
	</div>

	<!-- Slideshow: words & buttons -->
	<div id="slideshow_container">
		<div id="slideshow"></div>
	</div>

	<!-- Scratch Transition -->
	<canvas id="scratch" width="711" height="400"></canvas>

	<!-- Skip -->
	<div id="skip" >صفحه‌ی بعد</div> <!-- TRANSLATE -->

	<!-- Modal -->
	<div id="modal_container">
		<div id="modal_bg"></div>
		<div id="modal">
			<div id="modal_close">⨯</div>
			<div id="modal_content_container">
				<div id="modal_content"></div>
			</div>
		</div>
	</div>

</div>

<!-- Navigation: Audio, Contents, Share, Translations -->
<div id="navigation_container" style="direction: rtl;">
	<div id="sound" mute="no">
		<div id="sound_icon"></div>
		{{--<span id="sound_on">روشن</span> <!-- TRANSLATE -->
		<span id="sound_off">خاموش</span> <!-- TRANSLATE -->--}}
	</div>
	<div id="sharing">
			<span id="share_title">
			دانایی و/‌یا دیوانگی مردم <!-- TRANSLATE -->
			</span>
		<span id="share_desc">
			<!-- TRANSLATOR: keep this on ONE LINE or the social sharing will break! -->
			چرا گروه‌های مردمی؛هوشمند،گنگ،مهربان و‌یا بی‌رحمانه عمل می‌کنند؟ راهنمای تعاملی شبکه‌های انسانی:
			<!-- TRANSLATE -->
			</span>
	</div>
	<div id="navigation">

		<!-- The chapters -->
		<!-- TRANSLATE all the Chapter names! -->
		<div chapter="Introduction">
			<span>۰</span>
			<span>۰.معرفی</span>
		</div>
		<div chapter="Networks">
			<span>۱</span>
			<span style="direction: rtl;">ارتباطات</span>
		</div>
		<div chapter="Simple">
			<span>۲</span>
			<span> آلودگی ها</span>
		</div>
		<div chapter="Complex">
			<span>۳</span>
			<span>سرایت پیچیده </span>
		</div>
		<div chapter="BB">
			<span>۴</span>
			<span> پیوند زدن و پل زدن</span> <!-- note: &amp; is html for the "and" sign -->
		</div>
		<div chapter="SmallWorld">
			<span>۵</span>
			<span> جهان کوچک</span>
		</div>
		<div chapter="Conclusion">
			<span>۶</span>
			<span>در نتیجه...</span>
		</div>
		<div chapter="Credits">
			<span>۷</span>
			<span> تمام</span>
		</div>
		<div chapter="Sandbox">
			<span>★</span>
			<span>★ حالت آزاد! ★</span>
		</div>

		<!-- A divider -->
		<span class="nav_divider"></span>

		<!-- Bonus Notes & References -->
		<div modal="bonus">
			<span>?</span>
			<span>جعبه پاداش!</span> <!-- TRANSLATE -->
		</div>
		{{--<div modal="references">
			<span style="margin-top: 7px; font-size: 35px;">*</span>
			<span>منابع</span> <!-- TRANSLATE -->
		</div>--}}
		{{--<div modal="translations">
			<span style="margin-top:5px; position:relative;"><span style="
				    position: absolute;
				    top: -8px;
				    left: 6px;
				">A</span><span style="
				    position: absolute;
				    font-size: 16px;
				    top: -1px;
				    left: 16px;
				">あ</span></span>
			<span>Translations</span> <!-- TRANSLATE -->
		</div>--}}

		<!-- The hover bubble -->
		<span id="nav_bubble"></span>

	</div>
	<div id="translations"></div>
	<div id="social"></div>
</div>

<!-- The Pencil -->
<div id="pencil_container">
	<canvas id="pencil"></canvas>
</div>

<!-- Preloader -->
<div id="pre_preloader">
	<div>...منتظر بمانید</div> <!-- TRANSLATE -->
</div>

</body>
</html>

<!-- - - - - -->
<!-- SCRIPTS -->
<!-- - - - - -->

<script src="{{url('js/lib/helpers.js')}}"></script>
<script src="{{url('js/lib/inobounce.js')}}"></script>
<script src="{{url('js/lib/minpubsub.src.js')}}"></script>
<script src="{{url('js/lib/howler.min.js')}}"></script>
<script src="{{url('js/lib/Key.js')}}"></script>
<script src="{{url('js/lib/Mouse.js')}}"></script>
<script src="{{url('js/lib/Sprite.js')}}"></script>

<script src="{{url('js/slideshow/Slideshow.js')}}"></script>
<script src="{{url('js/slideshow/Pencil.js')}}"></script>
<script src="{{url('js/slideshow/Boxes.js')}}"></script>
<script src="{{url('js/slideshow/Scratch.js')}}"></script>
<script src="{{url('js/slideshow/Navigation.js')}}"></script>
<script src="{{url('js/slideshow/SimUI.js')}}"></script>
<script src="{{url('js/slideshow/SandboxUI.js')}}"></script>
<script src="{{url('js/slideshow/Modal.js?v=5')}}"></script>
<script src="{{url('js/slideshow/Preloader.js')}}"></script>
<script src="{{url('js/slideshow/Translations.js?v=5')}}"></script>

<script src="{{url('js/sim/Peep.js?v=2')}}"></script>
<script src="{{url('js/sim/Connection.js')}}"></script>
<script src="{{url('js/sim/ConnectorCutter.js')}}"></script>
<script src="{{url('js/sim/Simulations.js')}}"></script>

<script src="{{url('js/chapters/A_Preloader.js')}}"></script>
<script src="{{url('js/chapters/B_Introduction.js')}}"></script>
<script src="{{url('js/chapters/C_Networks.js')}}"></script>
<script src="{{url('js/chapters/D_Simple_Contagion.js')}}"></script>
<script src="{{url('js/chapters/E_Complex_Contagion.js')}}"></script>
<script src="{{url('js/chapters/F_Bonding_And_Bridging.js')}}"></script>
<script src="{{url('js/chapters/G_Small_World.js')}}"></script>
<script src="{{url('js/chapters/H_Conclusion.js')}}"></script>
<script src="{{url('js/chapters/I_Credits.js')}}"></script>
<script src="{{url('js/chapters/J_Sandbox.js?v=2')}}"></script>

<script src="{{url('js/crowds-master.js')}}"></script>


<!-- - - - - - - - - - - - -->
<!-- THE SLIDESHOW'S WORDS -->
<!-- - - - - - - - - - - - -->

<!--

This is the bulk of what you need to TRANSLATE!
Translate just the text that's within the <tag></tags>
If you're using a code editor (like Sublime Text https://www.sublimetext.com/),
it should automatically highlight what the text is (usually in white).

-->

<span style="display:none">

<!-- Preloader -->

<words id="preloader_title">

	<div style="font-size: 30px;">
		{{--<span>the</span>
		<br>--}}
		<span style="font-size: 60px;letter-spacing: 4px;">دانایی</span>
		<br>
		<span style="position:relative;top: -10px;">و/یا</span>
		<br>
		<span style="font-size: 60px;">دیوانگیِ</span>
		<br>
		{{--<span style="position: relative;top: -11px;">of</span>
		<br>--}}
		<span style="font-size: 100px;line-height: 80px;position: relative;top: -15px; display:block;">مردم</span>
	</div>

	<div style="color:#999;margin-bottom: 100px;">
		<!-- TRANSLATE note: comment out the line below... -->
		مدت زمان بازی: ۳۰ دقیقه --
		ترجمه توسط سید فرزان فخرایی

		<!-- ...and UN-comment + TRANSLATE this line! -->
		<!-- by nicky case • translated by [your name] • <a href='.'>original in English</a> -->
	</div>

</words>

<words id="preloader_button">
	<next></next>
</words>

<words id="preloader_loading">
	منتظر بمانید
</words>

<words id="preloader_play">
	بیایید شروع کنیم!
</words>

	<!-- Introduction -->
	<!--

    TRANSLATE note: to make the text stay in a circle, I added lots of <br> breaks.
    You may have to re-arrange the <br>'s in order to do your translation.
    It shouldn't look too bad if they're slightly off, though!

    Also, <b></b> bolds a word/phrase, and <i></i> italicizes a word/phrase.

    -->

<words id="intro">

	<br><br>

	آقای ایزاک نیوتن تقریبا مطمئن بود که
	<br>
	یک آدم باهوش و زیرک است. بالاخره بعد از
	<br>
	اختراع ریاضی(قرن ۱۷ام) و نظریه جاذبه،به نظر منطقی
	<br>
	میرسد که باید به اندازه کافی باهوش باشد که بتواند
	<br>
	 اندکی سرمایه‌گذاری مالی انجام دهد، مگه نه؟ به هر صورت
	<br>
	خلاصه بخواهم بگویم، او ۴،۶۰۰،۰۰۰$ (به دلار امروزی)
	<br>
	در سرمایه‌گذاری دیوانه‌وار در سراسر کشور که به حباب
	<br>
	دریای جنوب سال ۱۷۲۰ معروف است، از دست داد.
	<br><br>


به طوری که خود نیوتن بعد‌ها گفت:‌  <b>“من می توانم حرکت
		<br>
	اجسام بهشتی رو محاسبه کنم(اغراق)، ولی دیوانگی مردم رو نه.”</b>

	<next>اره ضد حال خورده :)</next>

</words>

<words id="intro_2">

	<div style="height:0.5em"></div>

	البته این تنها مرتبه‌ای نیست که بازارها،
	<br>
 موسسات و یا حتی کل دموکراسی‌ها بلا‌استفاده شده‌اند
	<br>
	 –<b>دیوانگی مردم! </b>ولی هنوز، بلافاصله بعد از اینکه
	<br>
	 امیدت رو نسبت به انسانیت از دست میدی میبینی که توی
	<br>
	 طوفان‌ها، شهروندان به کمک هم میروند تا یکدیگر را
	<br>
	 نجات دهند،انجمن‌هایی که برای مشکل‌ها راه حل می‌یابند،
	<br>
	مردمی که که برای دنیایی بهتر میجنگند –  <b>دانایی مردم!</b>

	<div style="height:0.9em"></div>

	<b>ولی <b> چرا </b>برخی از مردم دیوانه  می‌شوند  و برخی دانا ؟</b>
	<br>
	هیچ نظریه‌ای نیست که بتواند همه چیز را توضیح بدهد، ولی من فکر میکنم
	<br>
	 که یک شاخه جدید علم،<b>علم شبکه</b> ، میتواند ما را راهنمایی کند! و ایده اصلی
	<br>
	  آن، این است که: مردم را بفهمیم،ما نباید به<b> خود افراد </b>نگاه کنیم بلکه...
	<br>


	<next>به<b> روابطشان </b>باید نگاه کنیم </next>

</words>

	<!-- Networks -->

<words id="networks_tutorial_start">
	<b>حال، بیایید یک شبکه رسم کنیم!</b>
	هر رابطه نشانه یک دوستی بین دو فرد است:
</words>

<words id="networks_tutorial_connect">
	 به هم وصل کنید تا ارتباط برقرار شود.
</words>

<words id="networks_tutorial_disconnect">
	 خط بکشید تا از بین برود.
</words>

<words id="networks_tutorial_end">

	وقتی که خط کشیدن و بازی کردنتان تمام شد،
	<next wiggle>بیایید ادامه دهیم </next>

</words>

<words id="networks_threshold">

	روابط اجتماعی چیزی بیش از ساختن عکس‌های زیبا است.
	مردم برای درک دنیایشان به روابط اجتماعیشان  <b>نگاه میکنند.</b>
	برای مثال، مردم به همنوعشان نگاه میکنند تا متوجه شوند
	<b>که چند درصد دوستانشان  (به غیر از خودشان)، </b>
	مشروبات الکلی مصرف میکنند .<icon name="yellow"></icon>

</words>

<words id="networks_threshold_instruction">
	<b>اتصالات را رسم کنید/ خراش دهید تا مشاهده کنید چه اتفاقی رخ میدهد. </b>
</words>

<words id="networks_threshold_end">
	<next>بسیار عالی، فهمیدم.</next>
</words>

<words id="networks_pre_puzzle">
	گرچه، شبکه‌ها(اجتماعی) میتوانند مردم را <b>فریب</b> دهند.
	دقیقا مثل زمین که صاف به نظر میرسد چون ما روی آن قرار داریم،
	مردم ممکن است ایده‌های اشتباهی در مورد جامعه دریابند چون  <b>در آن </b>قرار دارند.
</words>

<words id="optional_reading">
	<div style="position:absolute; top:5px;">
		دست نوشته‌های اضافی
	</div>
	{{--<div style="position:absolute; left:216px; top:10px;">--}}
		{{--&darr; منابع--}}
	{{--</div>--}}
</words>

<words id="networks_pre_puzzle_2">

	<bon id="books" style="text-align: -webkit-right"></bon>

	<br>

	برای نمونه، یک مطالعه در سال ۱۹۹۱ <ref id="drunk"></ref> نشان داد که
	“عملا همه دانشجویان گزارش دادند که دوست آن‌ها بیشتر از خودشان مشروبات الکلی مصرف میکند.”
	ولی این غیرممکن به نظر میرسد! چه طور ممکن است؟
	خوب، شما با رسم کردن یک شبکه در شرف ابداع جواب از خودتان هستید.
	وقتشه که...

	<next>همه را فریب دهید </next>

</words>

<words id="networks_puzzle">

	<b style="font-size:2em">وقت پازله!</b>
	<br>
	<b>همه </b>را به گونه‌ای فریب دهید که
	گمان کنند اکثر دوستانشان(۵۰٪ و بیشتر) مصرف‌کننده مشروبات الکلی هستند <icon name="yellow"></icon>
	(گرچه  تعداد افرادی که مصرف نمی‌کنند به نسبت ۲ به ۱ بیشتر است)

</words>
<words id="networks_puzzle_metric">
	<b>فریب خورده:</b>
</words>
<words id="networks_puzzle_metric_2">
	نفر از ۹ نفر
</words>
<words id="networks_puzzle_end">
	تبریک می‌گویم! شما موفق به فریب گروهی از دانشجویان به باور به
	شیوع یک عادت اجتماعی فوق‌العاده ناسالم، شدید.
	<next wiggle>تشکر؟...</next>
</words>

<words id="networks_post_puzzle">

	چیزی که شما ساختید به خیال باطل اکثریت  معروف است <ref id="majority"></ref>,
	که همچنین توضیح می‌دهد که چرا مردم تصور میکنند دیدگاه‌های سیاسی‌شان قابل قبول است،
	یا اینکه چرا افراط‌گرایی رایج‌تر از آن که هست به نظر می‌رسد.
	<b>دیوانگی .</b>

	<bon id="connections" style="text-align: -webkit-right"></bon>

	اما مردم فقط نظر‌ها و رفتار‌های دیگران را <b>مشاهده نمی‌کنند</b> بلکه مردم به طور فعال
	از آن‌ها<b> تقلید میکنند.</b>
	حال بیایید نگاهی بیاندازیم به چیزی که عالمان شبکه به آن گویند...

	<next>“سرایت!” </next>


</words>

	<!-- Simple Contagions -->

<words id="simple_simple">
	<b>بیایید فعلا "حد آستانه" را کنار بگذاریم.</b>
	در زیر: شخصی <icon name="red"></icon> با مقداری اطلاعات داریم.
	و نیز مقداری اطلاعات <b>غلط ،</b>که بچه‌های امروزی از آن به عنوان “اخبار غلط”  یاد می‌کنند.
	و این شخص به مانند یک ویروس همه روزه برای دوستانش شایعه‌پراکنی  میکند.
	و دوستانش نیز برای <b>دیگر دوستانشان </b> می‌گویند .  و قس علی هذا .
	<br>
	<b>
	شبیه سازی را شروع کن! <div class="darr"></div>
	(اخطار:شما <b> در هنگام</b> اجرای شبیه ساز نمیتوانید چیزی رسم کنید!)
	</b>
</words>

<words id="simple_simple_2">
	نکته: علی‌رغم منفی بودن نامش ، “سرایت” میتواند هم خوب باشد و هم بد(یا خنثی  و یا مبهم ).شواهد آماری قوی وجود دارد<ref id="contagion"></ref> که سیگار
	کشیدن، سلامتی ، خوش‌حالی ، الگو‌های رای‌گیری  و مراتب همکاری همگی "مسری هستند" -- و برخی شواهد حاکی از آن است که
	مسری بودن در مورد خودکشی <ref id="suicides"></ref> و تیر‌اندازی‌های جمعی <ref id="shootings"></ref>نیز صادق است.
</words>

<words id="simple_simple_end">
	<next wiggle>این ناراحت‌کننده  است </next>
</words>

<words id="simple_cascade">
	البته که ناراحت‌کننده است.
	بگذریم،  <b>وقت پازل است.</b>
	<br>
	شبکه‌ای رسم کنید و شبیه‌سازی را روی آن اجرا کنید
	به گونه‌ای که <b>همه</b> "آلوده" به آلودگی  شوند.
	<br>
	(قانون جدید:شما نمی‌توانید ارتباط های   <b>آلوده</b> را قطع کنید!)
</words>

<words id="simple_cascade_end">
	<next wiggle>بسیار عالی </next>
</words>

<words id="simple_post_cascade">
	این رواج دیوانگی  به <b>"ریزش آبشاری اطلاعات"</b>معروف است.
	آقای نیوتن فریب چنین چیزی را در سال 1720 خورد.
	موسسات مالی دنیا در سال 2008 فریب چنین چیزی را خوردند.<ref id="subprime"></ref>
	<br><br>
	گرچه:  <b>این شبیه‌سازی غلط است. </b>
	اغلب ایده‌ها به مانند ویروس <b>پخش نمی‌شوند.</b>
	بر اساس رفتار‌ها و باور‌های زیادی، باید بیش از فقط یکبار با یک ایده برخورد
	بکنید  تا به آن "آلوده شوید."
	. به همین ترتیب، عالمان شبکه به راه بهتر و سریع‌تری
	برای وصف کردن رواج آلودگی‌ها رسیده‌اند به آن گویند...
	<next wiggle>“سرایت<b> پیچیده!</b>”</next>
</words>

	<!-- Complex Contagions -->

<words id="complex_complex">

	بیایید آن  "حد آستانه" و مثال مشروبات الکلی را بازگردانیم!  <icon name="yellow"></icon>
	وقتی شما برای اولین مرتبه بازی کردید مردم رفتارشان را تغییر نمی‌دادند.

	<br><br>

	حال، بیایید شبیه‌سازی کنیم که چه میشد اگر مردم شروع میکردند به مصرف مشروبات الکلی
	<b>وقتی بیش از ۵۰٪ درصد از دوستانشان مصرف میکردند! </b>
	<b>قبل از آغاز شبیه‌سازی از خودتان بپرسید که فکر میکنید  <b>چه باید</b> رخ دهد.</b>

	<br><br>

	<b>حالا شبیه سازی را شروع کن و ببین در حقیقت چه اتفاقی می‌افتد!  </b>

</words>

<words id="complex_complex_2">
	<span style="line-height:1.3em; display:block;">

		بر خلاف مثال سرایت  "اطلاعات غلطمان،" <icon name="red"></icon>
		این آلودگی  <icon name="yellow"></icon> به همه سرایت  <b>نمی‌کند!</b>
		افراد اندکی در ابتدا "ابتدا آلوده می‌شوند،" با این حال که آن‌های فقط با یک مصرف‌کننده مشروبات الکلی رابطه دارند،
		ولی همان مصرف‌کننده ۵۰٪ از دوستانش را تشکیل میدهد.(بله! آن‌ها تنها هستند.)
		به همین ترتیب، اشخاص نزدیک ته زنجیره "آلوده" <b>نشده‌اند</b>
		چون آن‌ها فقط با یک مصرف‌کننده مشروبات الکلی در ارتباط
		بودند، آن‌ها حد آستانه ۵۰٪ را نگذراندند.

		<div style="height:0.75em"></div>

		درصد <b>نسبی</b> دوستان "آلوده" شده اهمیت دارد.
		<b>این،</b>تفاوت بین  <b>سرایت پیچیده </b><ref id="complex"></ref>
		و <b>سرایت ساده</b> ما،که می‌گفتیم"به مانند یک ویروس پخش می شود،" است.
		(می‌توان گفت که سرایت ساده همان سرایت پیچیده با حد آستانه ۰٪ است.)

		<div style="height:0.75em"></div>

		گرچه، سرایت آلودگی‌ها الزاما بد نیستند –
		خب  <b>دیوانگی</b> مردم کافی است.نوبتی هم که باشد نوبت...
		<next><b>دانایی</b>مردم؟...</next>

	</span>
</words>

<words id="complex_complex_3">

	اینجا ما شخصی  <icon name="blue"></icon>  رو داریم که داوطلب می‌شود که برای مثال در صورت وقوع طوفان،
	مردم را نجات دهد، یا از کودکان تنگدست محله‌شان  مراقبت کند، یا یک چیز جذابی  از این قبیل.
	نکته اینجاست که، این یک سرایت پیچیده “خوب” است.
	البته این مرتبه، حد آستانه تنها ۲۵٪ است –
	مردم حاضرند داوطلب شوند، ولی فقط اگر بیش از ۲۵٪ از دوستانشان هم حاضر باشند داوطلب شوند.
	بالاخره نیت خیر نیازمند کمی تشویق از سمت جامعه  دارد.

	<br><br>

	<b>&larr; همه را به جو خوب "آلوده" کنید!</b>

</words>

<words id="complex_complex_3_end">
	<span style="line-height:1.3em; display:block;">

		<b>نکته: </b>داوطلب شدن تنها  <b>یکی</b> از سرایت‌های پیچیده است!
		سایر عبارت‌اند از: مشارکت افراد برای رای دادن،
		عادت‌های زندگی،به چالش کشیدن باور‌ها،
		عمیقا وقت گذاشتن برای درک یک مسئله &mdash;
		هر چیزی که به بیش از یک “افشاگرایی”    نیاز داشته باشد.
		سرایت‌های پیچیده لزوما  <b> عاقلانه </b> نیستند،
		ولی عاقل بودن خود یک سرایت پیچیده است.

		<div style="height:0.75em"></div>

		<bon id="contagions" style="text-align: -webkit-right"></bon>

		حال برای اینکه<b> واقعا</b> عجیب بودن و قدرت سرایت‌های پیچیده را نشان بدهیم، بیایید مروری بکنیم بر...

		<next>یک پازل از قبل...  </next>

	</span>
</words>

<words id="complex_cascade">
	این پازل را به خاطر دارید؟ این بار، با یک  <b>سرایت پیچیده </b><icon name="blue"></icon>  انجامش خواهیم داد، کمی بیشتر به طول می‌انجامد....
	<br>
	<b>سعی کنید همه را با دانایی پیچیده آلوده کنید!  <div class="darr"></div></b>
</words>

<words id="complex_cascade_feel_free">
	(راحت باشید و هر موقعی که خاستید دکمه شروع را بزنید و راه‌های مختلف را به <b>هر مقداری</b> که می‌خواهید امتحان کنید!)
</words>

<words id="complex_cascade_end">
	<next wiggle>ایوووول! </next>
</words>

<words id="complex_post_cascade">
	حال، پس از حل این پازل ممکن است گمان کنید که نیاز دارید برای آلوده کردن مردم به سرایت‌ها،
	"پیچیده" یا "ساده"، خوب یا بد، دانایی یا دیوانگی، تعداد ارتباطات را بیشتر کنید.
	ولی آیا واقعا این گونه است؟ خوب بیایید مروری بکنیم بر...
</words>
<words id="complex_post_cascade_end">
	<next wiggle>پازل دیگری از قبل... </next>
</words>

<words id="complex_prevent">
	اگر دکمه شروع زیر بفشارید، سرایت پیچیده <icon name="blue"></icon> به همه منتقل می‌شود.
	تعجبی هم ندارد.
	ولی حال، بیایید  <b>خلاف</b> آن چیزی که تا به حال انجام داده‌ایم را انجام دهیم:
	<b>شبکه‌ای را رسم کنید که از انتقال سرایت به همه <b>جلوگیری </b>کند! <div class="darr"></div></b>
</words>

<words id="complex_prevent_2">
	می‌بینید؟
	در عین اینکه ارتباطات بیشتر باعث بهبود میزان انتقال‌ها در سرایت‌های <b>ساده</b> میشود،
	<b>نیز باعث ضعف در میزان انتقال‌ها در سرایت‌های  <b>پیچیده</b> می‌شود!</b>
	(شما را به فکرِ به اینترنت وا می‌دارد، مگه نه؟)
	و این فقط یک مشکل نظری نیست. این می‌تواند مسیله‌ای باشد حول زندگی و...
</words>

<words id="complex_prevent_end">
	<next wiggle>یا مرگ ...  </next>
</words>

<words id="complex_groupthink">

	افرادی که در ناسا قرار داشتند، آدم‌های باهوش و زرنگی  بودند.
	آن‌ها از نظریه‌های نیوتن استفاده می‌کردند تا انسان را به ماه بفرستند.
	به هر حال، خلاصه بخواهم بگویم، در سال 1986،
	<b>علی‌رقم هشدار‌های مهندسان، آن‌های چالشگر را به فضا </b>,
	پرتاب کردند،
	که منفجر شده و موجب مرگ ۷ نفر شد.
	آخرین دلیل وقوع این فاجعه:
	آن روز صبح هوا خیلی سرد بود.

	<div style="height:0.9em"></div>

	چند دلیل عقب‌تر: مدیران هشدار مهندسان را نادیده گرفتند.
	چرا؟ به دلیل  <b>همفکری گروهی  </b><ref id="groupthink"></ref>.
	وقتی یک گروه  <b>خیلی</b>  تنگاتنگ به هم متصل نباشند (به طوری که تمایل دارند
	در بالای نهاد‌ها باشند ) آن‌ها در مقابل ایده‌های پیچیده که خودشان و
	باور‌هایشان را به چالش می‌کشد، مقاوم می‌شوند.


	<div style="height:0.9em"></div>

	در نتیجه، این گونه است که نهاد‌ها به دیوانگی جمعی دچار می‌شوند.
	ولی آیا ما می‌توانیم برای  <b>دانایی</b> جمعی طراحی کنیم؟
	کوتاه در دو کلمه:

	<next>پیوند زدن و پل زدن  </next>

</words>

	<!-- Bonding & Bridging -->

<words id="bonding_1">
	تعداد کمی ارتباط، باعث می‌شود که ایده منتقل نشود.=>
	<br>
	<= تعداد زیادی ارتباط، باعث می‌شود که دچار همفکری گروهی شوید.</div>
</words>

<words id="bonding_2">
	<b>
	گروهی را رسم کنید که تعداد ارتباطات آن در نقطه عطف باشد:
	فقط به اندازه‌ای رسم شده باشد که یک سرایت پیچیده را منتقل کند!
	<div class="darr"></div>
	</b>
</words>

<words id="bonding_end">
	به اندازه کافی ساده است!
	به تعداد ارتباطات  <b>در</b> یک گروه  <b>پیوند سرمایه اجتماعی</b><ref id="social_capital"></ref>می‌گویند.
	ولی در مورد ارتباطات چه...
	<next wiggle>بین<b>چند گروه...</b> </next>
</words>

<words id="bridging_1">
	همانطور که مسلما تا به حال حدس زده‌اید،
	به تعداد ارتباطات <b>میان</b> چند گروه
	<b>پل ارتباطی سرمایه اجتماعی </b>می‌گویند،
	این اهمیت دارد، به دلیل اینکه به گروه‌ها کمک می‌کند تا از فضای محبوس خویش  خارج شوند!
	<br>
	<b>پلی بسازید تا همه را به دانایی پیچیده آلوده کنید!</b>
</words>

<words id="bridging_end">
	مانند پیوند دادن، نقطه عطفی نیز برای پل ساختن وجود دارد.<ref id="bridge"></ref>
	(چالش اضافی: سعی کنید پل مستحکمی بسازید به گونه‌ای که سرایت پیچیده
	<b>نتواند</b> از آن انتقال یابد.)
	حال که میدانیم چگونه باید <b>بین</b> و <b>درون</b>گروه‌های روابط را طراحی کنیم، بیایید
	<next wiggle>هر دو را با هم انجام دهیم!...</next>
</words>

<words id="bb_1">

	<b style="font-size:2em">پازل نهایی!</b>
	<br>
	بین(پل زدن) و داخل(پیوند زدن) گروه‌ها روابطی رسم کنید
	تا دانایی را به همه رواج دهید:

</words>
<words id="bb_2">

	تبریک، شما یک نوع خیلی خاصی از شبکه را رسم کردید.
شبکه‌هایی با مقدار ارتباطات درست بین و درون گروهی
	عمیقا مهم هستند، که به آنها...
	<next wiggle>"شبکه‌هایی جهان کوچک"  می‌گویند. <div class="rarr"></div> </next>

</words>
<words id="bb_small_world_1">

	<b>“وحدت بدون یکنواختی.”  “تنوع بدون تقسیم.”</b>
	<br>
	هر چه آن را خطاب کنید،
	بالاخره مردم در زمان‌ها و فرهنگ‌های مختلف اغلب به یک قطعه از دانایی میرسند:
	<b>
		یک جامعه سالم به یک نقطه عطف برای ارتباطات بین و درون گروه‌ها نیاز دارد.
	</b>
	به این معنی که:

</words>
<words id="bb_small_world_2">
	این نه...
	<br>
	(چون از این طریق ایده‌ها نمیتوانند منتقل بشوند.)
</words>
<words id="bb_small_world_3">
	اینم نه...
	<br>
	(چون از این طریق دچار هم‌فکری گروهی می‌شوید.)
</words>
<words id="bb_small_world_4">
	...اما <b>این یکی:</b>
</words>
<words id="bb_small_world_5">

	حال عالمان شبکه یک تعریف ریاضیاتی از این دانایی باستانی دارند:
	<b>شبکه جهان کوچک</b><ref id="small_world"></ref>.
	این نقطه عطف بهینه برای پیوند‌دهی و پل‌سازی درون و بین گروه‌ها توصیف می‌کند که
	چگونه نورون‌های ما متصل شده‌اند،<ref id="swn_neurons"></ref>,
	خلاقیت جمعی چگونه ترویج داده شده است ، <ref id="swn_creativity"></ref>
	و حل مسئله، <ref id="swn_social_physics"></ref>,
	و حتی یک مرتبه به جان اف کندی، رییس جمهور آمریکا، کمک کرد تا از جنگ هسته‌ای اجتناب کند(تقریبا). بنابراین، بله، جهان‌های کوچک اهمیت زیادی دارند.

</words>
<words id="bb_small_world_end">
	<next>بسیار خوب، بیایید جمع‌بندی کنیم...  <div class="rarr"></div> </next>
</words>

	<!-- Sandbox -->

<words id="sandbox_caption">
	(میخواهید یک راز را بدونید؟<ref id="sandbox"></ref>)
</words>

<words id="sandbox_contagion">
	سرایت:
</words>
<words id="sandbox_contagion_simple">
	ساده
</words>
<words id="sandbox_contagion_complex">
	پیچیده
</words>
<words id="sandbox_color_chooser">
	رنگ سرایت:
</words>
<words id="sandbox_tool_chooser">
	 یک ابزار انتخاب کن...
</words>

<words id="sandbox_tool_pencil">
	شبکه را رسم کنید
</words>
<words id="sandbox_tool_add">
	اضافه کردن افراد
</words>
<words id="sandbox_tool_add_infected">
	ایجاد آلودگی
</words>
<words id="sandbox_tool_move">
	جابه‌جایی افراد
</words>
<words id="sandbox_tool_delete">
	حذف افراد
</words>
<words id="sandbox_tool_clear">
	<b>پاک کردن همه</b>
</words>

<words id="sandbox_shortcuts_label">
	(...یا از کلید‌های میانبر صفحه کلید استفاده کنید!)
</words>

<words id="sandbox_shortcuts">
	[1]: اضافه کردن افراد &nbsp;&nbsp;&nbsp; [2]: ایجاد آلودگی
	<br>
	[Space]: جابه‌جایی &nbsp;&nbsp;&nbsp; [Backspace]: حذف
</words>

	<!-- Conclusion -->

<words id="conclusion_1">

	<div style="font-size: 30px;">
		به صورت خلاصه: همه‌‌ در مورد...
	</div>
	<div style="
		width: 100%;
	    position: absolute;
	    font-size: 88px;
	    top: 20px;
	    line-height: 100px; display:block;
	">
	    سرایت‌ها و ارتباطات‌اند.
	</div>

	<div style="
	    width: 710px;
	    position: absolute;
	    top: 125px;
	    left: 250px;
	">
		<b>سرایت‌ها:</b>
		به مانند نورون‌ها که سیگنال‌ها را در مغز
		منتقل می‌کنند، مردم باورها و رفتار‌ها را در یک
		جامعه منتقل می‌کنند. نه تنها ما روی دوستانمان
		تاثیر می‌گذاریم، بلکه ما روی دوستان دوستمان و
		حتی دوستان دوست دوستمان تاثیر می‌گذاریم<ref id="three_degrees"></ref>
		(تغییری باش که می‌خواهی در جهان ببینی...)
		اما، به مانند نورون‌ها، این فقط سیگنال‌ها نیستند که اهمیت دارند، بلکه....
	</div>

	<div style="
	    width: 710px;
	    position: absolute;
	    top: 275px;
	    left: 250px;
	">
		<b>ارتباطات: </b>
		کافی است ارتباطات کم باشد تا اینکه ایده‌های
		پیچیده نتوانند منتقل شوند. و یا کافی است ارتباطات
		زیاد باشد تا اینکه ایده‌های پیچیده توسط هم‌فکری
		جمعی بی‌فایده شود. ترفند این است که یک شبکه جهان
		کوچک بسازیم، پیوند‌دهی و پل‌سازی در نقطه عطف بهینه‌شان.
	</div>

	<div style="
	    width: 350px;
	    position: absolute;
	    top: 410px;
	    left: 220px;
	    text-align: center;
	    color: #999;
	">
		(می‌خواهید خودتان یک شبیه‌سازی انجام دهید؟
		پس حالت آزاد رو چک کنید،با کلیک بر روی علامت (★)در منوی پایین! )
	</div>

	<div style="
	    width: 400px;
	    position: absolute;
	    top: 395px;
	    right: 0px;
	    text-align: right;
	">
		پس، اولین سوالمان چه؟
		چرا برخی مردم روی می‌آورند به...
	</div>
	<div style="
	    width: 300px;
	    position: absolute;
	    top: 460px;
	    right: 0px;
	">
		<next>...دانایی و/یا دیوانگی؟</next>
	</div>

</words>

<words id="conclusion_2">
	<span style="line-height:1.4em; display:block;">

		<div style="height:0.5em"></div>

		از نیوتن تا ناسا
		<br>
		تا علم شبکه، ما امروز اینجا خیلی مطالب را پوشش دادیم.
		<br>
		خلاصه بخواهم بگویم، دیوانگی مردم
		<br>
		الزاما ناشی از  <b>خود اشخاص </b>نیست، بلکه ناشی از
		<br>
		چگونگی اینکه ما در تار‌های چسبناک یک شبکه به دام افتاده‌ایم، است.

		<div style="height:0.9em"></div>

		این به این معنی  <b>نیست </b> که باید مسئولیت شخصی را رها کنیم،
		<br>
		چون که ما نیز  <b>بافنده‌های</b> آن تار هستیم. پس، سرایت‌های خودتان را بهبود بخشید:
		<br>
		در مورد ایده‌هایی که شما را به وجد می‌آورند شکاک باشید، <ref id="flatter"></ref>برای فهم ایده‌های
		<br>
		پیچیده وقت بگذارید و ارتباطات خود را بهبود بخشید: با اشخاص شبیه به
		<br>
		خودتان ارتباط برقرار کنید، اما همچنین پل‌های ارتباطی میان تقسیمات فرهنگی/سیاسی بسازید.

		<div style="height:0.9em"></div>

		ما می‌توانیم یک تار عاقلانه بسازیم. البته، این سخت‌تر از
		<br>
		خط خطی کردن روی یک صفحه است...

		<next>...ولی همچنین، ارزشش را دارد.</next>

	</span>
</words>

<words id="conclusion_3">
	<b>
		"پیروزی‌ها و فاجعه‌های بزرگ تاریخ رخ داده‌اند
		نه به دلیل اساسا خوب بودن مردم یا اساسا بد بودن مردم،
		بلکه به دلیل اساسا مردم بودن مردم."
	</b>
	<br>
	<span style="position:relative; top:5px">~</span> سید فرزان فخرایی (:
	<div style="height:0.8em"></div>
	<next small>:)</next>
</words>

	<!-- Credits -->

<words id="credits">

	<div style="text-align:center; color:#fff; letter-spacing: 1px; font-size: 24px; line-height: 27px;">

		<span style="color:#777; position:relative; top:5px;">
			ترجمه شده توسط:</span>
		<div style="font-size: 3em; line-height: 1.0em;">سید فرزان فخرایی</div>
		{{--<a target="_blank" href="http://ncase.me" style="text-decoration:none">
			play my other shtuff</a> ·
		<a target="_blank" href="https://twitter.com/ncasenmare" style="text-decoration:none">
			follow my tweeter</a>--}}

		<br><br>

		{{--<span style="color:#777; position:relative; top:5px; display: inline-block; margin-top: 15px;">
			سپاس فراوان از :</span>
		<div style="font-size: 3em; line-height: 1.0em;">علیرضا صادقیان و علی انواری</div>--}}
		{{--<a target="_blank" href="https://www.patreon.com/ncase" style="text-decoration:none">
			help me make more like this! &lt;3</a>
		<br>
		<a onclick='publish("reference/show", ["supporters"]);'>
			see my supporters</a> ·
		<a onclick='publish("reference/show", ["playtesters"]);'>
			see my playtesters</a>

		<br><br>

		<span style="display: inline-block; margin-top: 15px;">
			♫ آهنگ پس زمینه:
			<a target="_blank" href="http://freemusicarchive.org/music/Komiku/Tale_on_the_Late/" style="text-decoration:none">
				"Friends 2018" and "Friends 2068"</a>
			توسط کُمیکو
			<br>
			--}}{{--&lt;/&gt; <i>Crowds</i> is
			<a target="_blank" href="https://github.com/ncase/crowds" style="text-decoration:none">
				fully open source</a>
		</span>--}}{{--

			<br>

		<bon id="further_reading" style="text-align: -webkit-right"></bon>

		</span>--}}
	</div>


</words>

	<!-- x. misc -->
<words id="WIN">
	بردید!
</words>
<words id="sim_start">
	آغاز شبیه سازی
</words>
<words id="sim_stop">
	پاک کردن و رسم دوباره
</words>
<words id="translations_exist">
	ترجمه‌ها:
</words>
<words id="translations_do_not_exist">
	<!-- There's no need to TRANSLATE this line since, well, -->
	<!-- it'll only show up if no translations exist -->
	What the, no fan-made translations exist yet?!
</words>
<words id="translations_add">
	(add your own!)
</words>
<words id="translations_original">
	<!-- No need to translate this, because, I assume, -->
	<!-- if someone wants to play the game in English, they can read English -->
	(original in English)
</words>

	<!-- - - - - - - -->
	<!-- BONUS BOXES -->
	<!-- - - - - - - -->

	<!--
    Sorry, not done yet! These Bonus Boxes need you to TRANSLATE, too:
    (And then afterwards, the final thing, translate the References)
    -->

<bonus id="books">

	<h3 style="text-align: -webkit-right">
	یک واکنش سریع به <b>دانایی مردم </b>از جمیز سراویسکی:
	</h3>

	<div style="text-align: -webkit-right">

	<img src="js/sprites/bonus/surowieki.jpg" width="200" height="300" style="float:left; margin-right:1em"/>

	اول بگوییم که من بر ضد این
	<a target="_blank" href="https://en.wikipedia.org/wiki/The_Wisdom_of_Crowds">
	کتاب</a>حرف نمی‌زنم.
	کتاب خوبی است، و اینکه نویسنده سعی داشته به همان سوالی که من دارم بپردازد:
	<b>“چرا برخی از مردم دیوانه می‌شوند و برخی دانا؟”</b>

	<br><br>

	پاسخ نویسنده: مردم وقتی تصمیم‌های خوبی میگیرند که همه به اندازه ممکن مستقل از هم باشند.
	او داستانی از یک همایشی در روستا را روایت میکند،
	جایی که اهل روستا دعوت شده بودند تا بیایند و وزن یک گاو نر را حدس بزنند.
	در کمال تعجب، میانگین  <b>همه</b> حدس‌های آن‌‌ها بهتر از <b>تک تک</b> حدس ها بود.
	ولی نکته اینجاست که: مردم باید  <b>مستقل </b> از هم وزن را حدس بزنند،
	در غیر این صورت ،
	حدس غلط قبلی بر حدس آن‌ها تاثیر گذاشته و
	باعث میشد که میانگین حدس‌ها منحرف شود.

	<br><br>

	ولی... من فکر نمیکنم که “همه را از هم مستقل کردن” پاسخ کامل باشد.
	حتی نوابغی که ما با متفکر‌های مستقل اشتباه میگیریمشان،
	تحت تاثیر عمیق دیگران هستند. به طوری که نیوتن گفته:
	<b>“اگر که من جلو را دیده‌ام، به دلیل این است که روی شانه‌های غول‌ها  ایستاده‌ام.”</b>

	<br><br>

	پس، کدام نظر درست است؟
	آیا دانایی از فکر نزد خود می‌آید، یا فکر با دیگران؟
	پاسخ بله است.

	<br><br>

	پس این چیزی است که من تلاش میکنم در این روایت اکتشافی توضیح دهم:
	چگونه آن جایگاه شیرین    بین استقلال  و وابستگی متقابل  را بیابیم –
	به بیانی دیگر، چگونه جامعه‌ای دانا  داشته باشیم.

	</div>

</bonus>
<bonus id="connections">

	<h3 style="text-align: -webkit-right">
	چه ارتباطات دیگری وجود دارد؟
	</h3>

	<div style="text-align: -webkit-right">

	به نیت ساده‌سازی ،
	شبیه‌سازی‌های من به گونه‌ای رفتار میکنند که گویی مردم فقط از طریق دوستی میتوانند
	با هم ارتباط داشته باشند، و اینکه همه دوستی‌ها یکسان است.
	اما عالمان شبکه  راه‌های دیگری را نیز برای ارتباط بین انسان‌ها در نظر دارند:

	<div style="clear:both"></div>
	<br>

	<img src="js/sprites/bonus/connection1.png" width="250" height="150" style="float:left; margin-right:1em"/>
	<b>ارتباط‌های یک طرفه :</b>آلیس رییس باب است، ولی باب، رییس آلیس نیست.
	کارول پدر/مادر  دیو است، ولی دیو، پدر/مادر کارول نیست.
	 “رییس” و “پدر/مادر” روابط <b>یک طرفه</b> هستند:
	روابطی که فقط از یک طرف برقرار است.
	در حالیکه رابطه‌ی دوستی یک رابطه‌ی دو طرفه است.

	<div style="clear:both"></div>
	<br>

	<img src="js/sprites/bonus/connection2.png" width="250" height="150" style="float:left; margin-right:1em"/>
	<b>ارتباط‌های وزن‌دار:</b>الینور و فرانکی صرفا آشنا  هستند.
	جورج و هری دوستان خیلی صمیمی  هستند.
	گرچه در هر دو مورد دوستی وجود دارد، اما در مورد دوم دوستی قوی‌تر است.
	به گونه‌ای که گوییم این دو ارتباط وزن‌های متفاوتی دارند.

	<div style="clear:both"></div>
	<br>

	<img src="js/sprites/bonus/map.png" width="200" height="200" style="float:left; margin-right:1em"/>
	توجه داشته باشید: <b>که تمامی این شبیه‌سازی‌ها نادرست هستند. </b> به همان ترتیبی که هر نقشه‌ای نادرست است.
	نقشه سمت  چپ را می‌بینید؟ در واقعیت ساختمان‌ها، بلوک‌های خاکستری بدون خصیصه نیستند!
	کلمات روی سطح شهر شناور نیستند! گرچه، نقشه‌ها خیلی کاربردی‌اند، نه علی‌رقم درحال ساده‌سازی بودنشان،
	بلکه <b> به خاطر </b> اینکه ساده شده‌اند.همین ترتیت برای شبیه‌سازی‌ها، یا هر نظریه علمی برقرار است.
	<b>البته </b>که آن‌ها نادرست هستند - این چیزی است که آن‌ها را<b>کاربردی</b>می‌کند.

	</div>

</bonus>
<bonus id="contagions">

	<h3 style="text-align: -webkit-right">
	چه نوع سرایت‌های دیگری وجود دارد؟
	</h3>

	<div style="text-align: -webkit-right">

	تعداد خیلی خیلی زیادی راه برای عالمان شبکه وجود دارد تا سرایت را شبیه‌سازی کنند!
	من ساده‌ترین را انتخاب کردم، محض اهداف آموزشی.
	ولی، این‌ها راه‌های دیگری است که میتوانید شبیه‌سازی را انجام دهید:

	<div style="clear:both"></div>
	<br>

	<img src="js/sprites/bonus/contagion1.png" width="250" height="150" style="float:left; margin-right:1em"/>
	<b>سرایت با تصادفی بودن : </b>.
	در معرض یک سرایت قرار گرفتن آلوده شدن را  <b>تضمین</b> نمی‌کند،
	فقط <b>احتمال</b>آن را بیشتر میکند.

	<div style="clear:both"></div>
	<br>

	<img src="js/sprites/bonus/contagion2.png" width="250" height="150" style="float:left; margin-right:1em"/>
	<b>مردم حد آستانه‌های سرایتی متفاوتی دارند: </b>
	: شبیه‌سازی‌های من به گونه‌ای هستند که گویی مردم حد آستانه‌های یکسانی در مصرف مشروبات الکلی(۵۰٪)،
	یا در داوطلب شدن(۲۵٪)، و یا حتی در دادن اطلاعات غلط(۰٪) دارند.
	البته که این در زندگی واقعی درست نیست و شما میتوانید به گونه‌ای شبیه‌سازی کنید که این نکته را نمایان کند.

	<div style="clear:both"></div>
	<br>

	<img src="js/sprites/bonus/contagion3.png" width="250" height="150" style="float:left; margin-right:1em"/>
	<b>محیطی مملو از آلودگی‌ها:</b>
	حال اگر  <b>چندین </b> سرایت با حدود آستانه<b>متفاوت </b> وجود داشت چه؟
	برای مثال، یک سرایت ساده “دیوانگی”  و یک سرایت پیچیده “دانایی”.
	اگر یک نفر به آن سرایت دیوانگی آلوده شد، آیا او هنوز می‌تواند به سرایت دانایی
	 آلوده شود؟ یا بالعکس؟
	آیا کسی می‌تواند به هر دو آلوده شود؟

	<div style="clear:both"></div>
	<br>

	<img src="js/sprites/bonus/contagion4.png" width="250" height="150" style="float:left; margin-right:1em"/>
	<b>سرایت‌هایی که تغییر و تکامل پیدا میکنند : </b>
	ایده‌های به گونه‌ای که ویروس‌ها به بهترین نحو از یکی به دیگری منتقل می‌شوند، انتقال نمی‌یابند. مانند یک ،
	یک کلاغ چهل کلاغ ، پیغام بعد از هر بار بازگو شدن تغییر پیدا می‌کند
	و حتی گاهی اوقات پیغام تغییر یافته از پیغام اصلی واگیردارتر  است!
	پس، به مرور زمان، ایده‌ها “تکامل” می‌یابند تا که بیشتر گیرا ، قابل تقلید و مسری باشند.

	<div style="clear:both"></div>

	</div>

</bonus>
<bonus id="further_reading">

	<h3 style="text-align: -webkit-right">
	I wanna learn more! What else can I read and/or play?
	</h3>

	<div style="text-align: -webkit-right">

	This explorable explanation was just a springboard for your curiosity,
	so you can dive deeper into a vast pool of knowledge!
	Here's more stuff on networks or social systems:

	<br><br>

	<img src="js/sprites/bonus/connected.png" width="200" height="200" style="float:left; margin-right:1em"/>
	<b>Book:</b>
	<a target="_blank" href="http://www.connectedthebook.com/">
	Connected</a>
	by Nicholas Christakis and James Fowler (2009).
	An accessible tour of how our networks affect our lives, for good or ill.
	<a target="_blank" href="http://www.connectedthebook.com/pdf/excerpt.pdf">
	Here's an excerpt: Preface &amp; Chapter 1
	</a>

	<div style="clear:both"></div>
	<br>

	<img src="js/sprites/bonus/trust.png" width="200" height="200" style="float:left; margin-right:1em"/>
	<b>Interactive:</b>
	<a target="_blank" href="http://ncase.me/trust/">
	The Evolution of Trust</a> by Nicky Case (me) (2017).
	A game about the game theory of how cooperation is built... or destroyed.

	<div style="clear:both"></div>
	<br>

	<img src="js/sprites/bonus/polygons.png" width="200" height="200" style="float:left; margin-right:1em"/>
	<b>Interactive:</b>
	<a target="_blank" href="http://ncase.me/polygons/">
	Parable of the Polygons</a> by Vi Hart and Nicky Case (also me) (2014).
	A story about how harmless choices can create a harmful world.

	<div style="clear:both"></div>
	<br>

	<img src="js/sprites/bonus/ee.png" width="200" height="200" style="float:left; margin-right:1em"/>
	Or, if you just want to see a whole gallery of interactive edu-things, here's
	<a target="_blank" href="http://explorabl.es/">
	Explorable Explanations</a>,
	a hub for learning through play!

	<div style="clear:both"></div>

	</div>

</bonus>

	<!-- - - - - - - -->
	<!-- REFERENCES  -->
	<!-- - - - - - - -->

	<!--
    Final thing! These references also need you to TRANSLATE:
    -->

<reference id="drunk">

	<h3>
	“virtually all [college] students reported that their friends drank more than they did.”
	</h3>

	<div>
	<a target="_blank" href="https://www.ncbi.nlm.nih.gov/pubmed/1758185">
	“Biases in the perception of drinking norms among college students”</a> by Baer et al (1991)
	</div>

</reference>
<reference id="majority">

	<h3>
	“The Majority Illusion”
	</h3>

	<div>
	<a target="_blank" href="http://journals.plos.org/plosone/article?id=10.1371/journal.pone.0147617">
	“The Majority Illusion in Social Networks”</a> by Lerman et al (2016).
	<br>
	Related: <a target="_blank" href="https://en.wikipedia.org/wiki/Friendship_paradox">
	The Friendship Paradox</a>.
	</div>
</reference>
<reference id="contagion">
	
	<h3>
	“strong statistical evidence that
	smoking, health, happiness, voting patterns, and cooperation levels
	are all contagious”
	</h3>

	<div>
	
	From Nicholas Christakis and James Fowler's
	wonderfully-written, layperson-accessible book,
	<a target="_blank" href="http://www.connectedthebook.com/">
	Connected</a> (2009). 

	</div>
</reference>
<reference id="suicides">

	<h3>
	“some evidence that suicides are [contagious], too”
	</h3>

	<div>
	<a target="_blank" href="http://www.jstor.org/stable/42000514?seq=4#page_scan_tab_contents">
	“Suicide Contagion and the Reporting of Suicide: Recommendations from a National Workshop”</a>
	by O'Carroll et al (1994), endorsed by the frickin' Centers for Disease Control &amp; Prevention (CDC).
	</div>

</reference>
<reference id="shootings">

	<h3>
	“some evidence that mass shootings are [contagious], too”
	</h3>

	<div>

	<a target="_blank" href="http://journals.plos.org/plosone/article?id=10.1371/journal.pone.0117259">
	“Contagion in Mass Killings and School Shootings”</a> by Towers et al (2015).

	<br><br>

	Also see: the
	<a target="_blank" href="http://www.dontnamethem.org/">
	Don't Name Them</a> campaign,
	which urges that news outlets <i>DO NOT</i> air mass murderers' names, manifestos, and social media feeds.
	This spreads the contagion.
	Instead, news outlets should focus on the victims, first responders, civilian heroes,
	and the grieving, healing community.

	</div>

</reference>
<reference id="subprime">

	<h3>
	“The world's financial institutions fell for such a cascade in 2008.”
	</h3>

	<div>
	<a target="_blank" href="https://newrepublic.com/article/63023/wall-streets-lemmings">
	“Lemmings of Wall Street”</a> by Cass Sunstein, is a quick, non-technical read.
	Published in Oct 2008, right in the wake of the crash.
	</div>

</reference>
<reference id="complex">

	<h3>
	“the complex contagion theory.”
	</h3>

	<div>

	<a target="_blank" href="https://www.unc.edu/~fbaum/teaching/articles/Granovetter_AJS_1978.pdf">
	“Threshold Models of Collective Behavior”</a> by Granovetter (1978)
	was the first time, as far as I know, anyone described a "complex contagion" model.
	(although he didn't use that specific name)

	<br><br>

	<a target="_blank" href="http://www.jstor.org/stable/10.1086/521848?seq=1#page_scan_tab_contents">
	“Complex Contagions and the Weakness of Long Ties”</a> by Centola &amp; Macy (2007)
	coined the phrase "complex contagion", and
	showed the important differences between that and "simple contagion".

	<br><br>

	<a target="_blank" href="http://journals.plos.org/plosone/article?id=10.1371/journal.pone.0180802">
	“Evidence for complex contagion models of social contagion from observational data”</a>
	by Sprague &amp; House (2017)
	empirically showed that complex contagions do, in fact, exist. (at least, in the social media data they looked at)

	<br><br>

	Finally,
	<a target="_blank" href="https://arxiv.org/pdf/cond-mat/0403699.pdf">
	“Universal behavior in a generalized model of contagion”</a> by Dodds &amp; Watts (2004)
	proposes a model that unifies <i>all</i> kinds of contagions: 
	simple and complex, biological and social!

	</div>

</reference>
<reference id="possum">
	<h3>
	“the possum has 13 nipples”
	</h3>
	<div>
	arranged in a ring of 12 nipples, plus one in the middle
	</div>
</reference>
<reference id="groupthink">

	<h3>
	“groupthink”
	</h3>

	<div>
	This Orwell-inspired phrase was coined by Irving L. Janis in 1971.
	<a target="_blank" href="https://web.archive.org/web/20100401033524/http://apps.olin.wustl.edu/faculty/macdonald/GroupThink.pdf">
	In his original article</a>,
	Janis investigates cases of groupthink, lists its causes, and &mdash; thankfully &mdash;
	some possible remedies.
	</div>

</reference>
<reference id="social_capital">

	<h3>
	“bonding and bridging social capital”
	</h3>

	<div>
	These two types of social capital &mdash; "bonding" and "bridging" &mdash;
	were named by Robert Putnam in his insightful 2000 book,
	<a target="_blank" href="http://bowlingalone.com/">
	Bowling Alone</a>. His discovery:
	across almost <i>all</i> empirical measures of social connectiveness,
	Americans are more alone than ever.
	Golly.
	</div>

</reference>
<reference id="bridge">

	<h3>
	“bridging social capital has a sweet spot”
	</h3>

	<div>
	<a target="_blank" href="https://sociology.stanford.edu/sites/default/files/publications/the_strength_of_weak_ties_and_exch_w-gans.pdf">
	“The Strength of Weak Ties”</a> by Granovetter (1973)
	showed that connections across groups helps spread simple contagions (like information),
	but
	<a target="_blank" href="http://www.jstor.org/stable/10.1086/521848?seq=1#page_scan_tab_contents">
	“Complex Contagions and the Weakness of Long Ties”</a> by Centola &amp; Macy (2007)
	showed that connections across groups may not help complex contagions,
	and it fact, can hurt their spread!
	</div>

</reference>
<reference id="small_world">

	<h3>
	“the small world network”
	</h3>

	<div>

	The idea of the "small world" was popularized by
	<a target="_blank" href="http://www.jstor.org/stable/2786545">Travers &amp; Milgram's 1969 experiment</a>,
	which showed that, on average, any two random people in the United States
	were just six friendships apart &mdash; "six degrees of separation"!

	<br><br>

	The small-world network got more mathematical meat on its bones with
	<a target="_blank" href="http://leonidzhukov.net/hse/2014/socialnetworks/papers/watts-collective_dynamics-nature_1998.pdf">
	“Collective dynamics of small-world networks”</a> by Watts &amp; Strogatz (1998),
	which proposed an algorithm for creating networks
	with both low average path length (low degree of separation)
	and high clustering (friends have lots of mutual friends) &mdash;
	that is, a network that hits the sweet spot!

	<br><br>

	You can also play with
	<a target="_blank" href="http://worrydream.com/ScientificCommunicationAsSequentialArt/">
	the visual, interactive adaptation of that paper</a> by Bret Victor (2011).

	</div>

</reference>
<reference id="swn_neurons">

	<h3>
	“[small world networks] describe how our neurons are connected”
	</h3>

	<div>
	<a target="_blank" href="https://www.ncbi.nlm.nih.gov/pubmed/17079517">
	“Small-world brain networks”</a> by Bassett &amp; Bullmore (2006).
	</div>

</reference>
<reference id="swn_creativity">

	<h3>
	“[small world networks] give rise to collective creativity”
	</h3>

	<div>

	<a target="_blank" href="http://www.jstor.org/stable/10.1086/432782?seq=1#page_scan_tab_contents">
	“Collaboration and Creativity: The Small World Problem”</a> by Uzzi &amp; Spiro (2005).
	This paper analyzed the social network of the Broadway scene over time,
	and discovered that, yup, the network's most creative when it's a "small world" network!

	</div>

</reference>
<reference id="swn_social_physics">

	<h3>
	“[small world networks] give rise to collective problem-solving”
	</h3>

	<div>
	See
	<a target="_blank" href="http://socialphysics.media.mit.edu/">
	“Social Physics”</a> by MIT Professor Alex "Sandy" Pentland (2014)
	for a data-based approach to collective intelligence.
	</div>

</reference>
<reference id="swn_jfk">

	<h3>
	“[small world networks] helped John F. Kennedy (barely) avoid nuclear war!”
	</h3>

	<div>

	Besides the NASA Challenger explosion, the most notorious example of groupthink
	was the Bay of Pigs fiasco.
	In 1961, US President John F. Kennedy and his team of advisors thought
	&mdash; for some reason &mdash;
	it would be a good idea to secretly invade Cuba and overthrow Fidel Castro.
	They failed.
	Actually, worse than failed: it led to the Cuban Missile Crisis of 1962,
	<i>the closest the world had ever been to full-scale nuclear war.</i>

	<br><br>

	Yup, JFK really screwed up on that one.

	<br><br>

	But, having learnt some hard lessons from the Bay of Pigs fiasco,
	JFK re-organized his team to avoid groupthink.
	Among many things, he:
	1) actively encouraged people to voice criticism,
	thus lowering the "contagion threshold" for alternate ideas.
	And
	2) he broke his team up into sub-groups before reconvening,
	which gave their group a "small world network"-like design!
	Together, this arrangement allowed for a healthy diversity of opinion,
	but without being too fractured &mdash; a wisdom of crowds.

	<br><br>

	And so, with the same <i>individuals</i> who decided the Bay of Pigs,
	but re-arranged <i>collectively</i> to decide on the Cuban Missile Crisis...
	JFK's team was able to reach a peaceful agreement with Soviet leader Nikita Khrushchev.
	The Soviets would remove their missiles from Cuba, and in return,
	the US would promise not to invade Cuba again.
	(and also agreed, in secret, to remove the US missiles from Turkey)

	<br><br>

	And that's the story of how all of humanity almost died.
	But a small world network saved the day! Sort of.

	<br><br>

	You can read more about this
	<a target="_blank" href="https://hbr.org/2013/11/how-john-f-kennedy-changed-decision-making">
	on Harvard Business Review</a>,
	or from
	<a target="_blank" href="https://web.archive.org/web/20100401033524/http://apps.olin.wustl.edu/faculty/macdonald/GroupThink.pdf">
	the original article on groupthink</a>.

	</div>

</reference>
<reference id="three_degrees">

	<h3>
	“we influence [...] our friends' friends' friends!”
	</h3>

	<div>
	Again, from Nicholas Christakis and James Fowler's
	wonderful book,
	<a target="_blank" href="http://www.connectedthebook.com/">
	Connected</a> (2009).
	</div>

</reference>
<reference id="flatter">
	<h3>
	“be skeptical of ideas that flatter you”
	</h3>
	<div>
	yes, including the ideas in <i>this</i> explorable explanation.
	</div>
</reference>
<reference id="sandbox">

	<h3>
	★ Sandbox Mode ★
	</h3>

	<div>
	The keyboard shortcuts (1, 2, space, backspace)
	work in <i>all</i> the puzzles, not just Sandbox Mode!
	Seriously, you can go back to a different chapter,
	and edit the simulation right there.
	In fact, that's how <i>I</i> created all these puzzles. Have fun!
	</div>

</reference>
<reference id="supporters" hidden=yes large=yes>
	<div>
	Dear Patreon supporters:
	Your generosity <i>literally</i> feeds me and pays my rent.
	You give me the freedom to make these weird educational games,
	so, from the bottom of my heart, thank you. &lt;3
	<br>
	<a target="_blank" href="https://www.patreon.com/ncase" style="text-decoration:none">
		(want to support me in making more stuff like this? check out my Patreon!)</a>
	</div>
</reference>
<reference id="playtesters" hidden=yes large=yes>
	<div>

	Thank you, everyone who playtested <i>Crowds</i>
	during its many stages of life!
	
	<br><br>
	<b>The Prototype:</b>
	<br>
	Maria ·
	Monica Srivastava

	<br><br>
	<b>The Alpha:</b>
	<br>
	Glen Chiacchieri ·
	Kalli Repzeti ·
	Mali Akmanalp ·
	Toph Tucker

	<br><br>
	<b>The Beta:</b>
	<br>
	Alex Dytrych ·
	Amit Patel ·
	Cassandra McClure ·
	Catherine Ray ·
	Josh Comeau ·
	Kayle Sawyer ·
	Matthew Conlen ·
	Srini Kadamati ·
	Vanessa Shen ·
	Wick Perry

	</div>
</reference>

</span>

<!--

And that's it! That's the last of what needed to a TRANSLATE

Thank you so, so much for doing this again, wow.

Finally, go to "translations.txt" and follow the instructions there,
in order to let this game "know" your translation exists.

-->
