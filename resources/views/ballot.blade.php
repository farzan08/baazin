<!doctype html>
<html lang="en">
<head>

    <!-- Meta -->
    <title>برای ساخت یک رای گیری بهتر</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{asset('ballot/favicon.png')}}">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="To Build a Better Ballot">
    <meta itemprop="description" content="an interactive guide to alternative voting systems">
    <meta itemprop="image" content="http://ncase.me/ballot/social/thumbnail.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ncasenmare">
    <meta name="twitter:title" content="To Build a Better Ballot">
    <meta name="twitter:description" content="an interactive guide to alternative voting systems">
    <meta name="twitter:creator" content="@ncasenmare">
    <meta name="twitter:image" content="http://ncase.me/ballot/social/thumbnail.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="To Build a Better Ballot">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://ncase.me/ballot/">
    <meta property="og:image" content="http://ncase.me/ballot/social/thumbnail.png">
    <meta property="og:description" content="an interactive guide to alternative voting systems">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ballot') }}/ballot.css">
    <base target="_blank">


</head>
<body>

<!-- - - - - - - - -

SPLASH!

- - - - - - - - - -->

<div id="splash" class="banner">
    <img src="{{asset('ballot/img/logo.png')}}"/>
    <iframe id="splash_iframe" src="{{asset('/ballot/splash/splash.html')}}" width="1500" height="400" scrolling="no"></iframe>
</div>

</div>

<div id="content">

    <!-- - - - - - - - -

    INTRODUCTION:
    THE SPOILER EFFECT

    - - - - - - - - - -->

    <div class="words">

        <p style="direction: rtl;">یک راهنمای تعاملی برای سیستم های رای گیری جایگزین.نه  <em>فقط </em> این انتخابات بلکه به صورت کلی.</p>

        <p style="direction: rtl;">در ابتدا، من نیاز دارم یک ایراد عجیب و غریب در سیستم رای گیریمان را توضیح بدهم. بیایید بگوئیم دو کاندیدا، مربع <img src="{{asset('ballot')}}/play/img/square.png"/> و مثلث <img src="{{asset('ballot')}}/play/img/triangle.png"/>، در محورهای سیاسی چندگانه وجود دارد. (به عنوان مثال، "چپ در مقابل راست" و "جهان‌گرایان در برابر ملی گرایان") همچنین بگیم یک رای دهنده وجود داره <img src="{{asset('ballot')}}/play/img/voter.png"/>، که به سادگی برای همه کسانی که موقیعیت سیاسی دارند، رأی می دهد.</p>

    </div>
    <div class="sim-intro">

        <p class="caption" style="margin-top:30px;direction: rtl">
            <b><span style="font-size:2.5em;">کلیک کنید و بکشید</span><br>رای‌دهنده و کاندیدا:</b>
        </p>
        <iframe src="{{asset('ballot')}}/play/model1.html" width="305" height="360" scrolling="no"></iframe>

    </div>
    <div class="words">

        <p style="direction: rtl;">این یک انتخاب سخت است. مثلث چند راس دارد، اما مربع راس بیشتری را داراست! افسوس، در نهایت، شما فقط می توانید به یک کاندید رای بدهید.</p>

        <p style="direction: rtl;">البته، در انتخابات بیش از یک رای دهنده وجود دارد. بیایید شبیه سازی کنیم که انتخابات با 100+ رای دهنده چگونه خواهد بود.</p>

    </div>
    <div class="sim-intro">

        <p class="caption" style="direction: rtl;">
            <b>کاندیداها و رأی دهندگان<span class="underline"></span> را به اطراف بکشید.<br>(برای حرکت رای دهندگان،  <em>وسط</em> جمعیت را بگیرید و بکشید)<br>تماشا کنید که چگونه انتخابات را تغییر می دهد:</b>
        </p>
        <iframe src="{{asset('ballot')}}/play/model2.html" width="320" height="400" scrolling="no"></iframe>

    </div>
    <div class="words">

        <p style="direction: rtl;">اکنون اجازه دهید انتخابات متفاوتی را در نظر بگیریم. بگوییم مثلث ، <em>در حال حاضر</em>،مربع را در نظرسنجی ها شکست داده است و کاندید سوم، شش ضلعی<img src="{{asset('ballot')}}/play/img/hexagon.png"/>، این را می بیند. (حامیان او از اینکه شش ضلعی از زوایای بیشتری مشکلات را حل می‌کند خشنودند) با الهام از موفقیت او، شش ضلعی در موقعیت سیاسی نزدیک به مثلث قرار می‌گیرد.</p>

        <p style="direction: rtl;">در حال حاضر، شما فکر می کنید که نتیجه چیز هایی که رای دهندگان می خواهند<em> بهترین</em> گزینه است یا حداقل<em>بدترین</em>گزینه نیست، درست است؟ خب...</p>

    </div>
    <div class="sim-intro">

        <p class="caption" style="direction: rtl;">
            <b>
                در ابتدا، <img src="{{asset('ballot')}}/play/img/triangle.png">،<img src="{{asset('ballot')}}/play/img/square.png">را شکست می‌دهد.<br>
                <img src="{{asset('ballot')}}/play/img/hexagon.png">را <i>به زیر</i> <img src="{{asset('ballot')}}/play/img/triangle.png">بکشید و<br>
                ببینید چه اتفاقی می‌افتد؟</b>
        </p>
        <iframe src="{{asset('ballot')}}/play/model3.html" width="320" height="460" scrolling="no"></iframe>

    </div>
    <div class="words">

        <p style="direction: rtl;">درست است. مربع، نامزد<em>کم طرفدار</em>ما، در حال حاضر برنده است! این به این دلیل است که وقتی شما دو نامزد خوب دارید، سرقت آراء آن‌ها از یکدیگر، اجازه می دهد نامزد بد سوم پیروزی را بدست آورد.</p>

        <p style="direction: rtl;">این<strong>اثر اسپویلر</strong> نامیده می شود. معروف ترین مثال دنیای واقعی آن درانتخابات سال 2000 بود، زمانی که رالف نادر رأی های آل گور را بدست آورد و باعث شد جرج بوش پیروز شود. و هر چند اثر اسپویلر در انتخابات سال 2016 نقش بزرگی نداشته، تاثیر آن هنوز می تواند احساس شود.</p>

        <p style="direction: rtl;">نخستین جمهوری خواه، یک نامزد ضد تقسیمی، ترامپ، علیه <em>شانزده</em>نامزدی که GOP تاسیس کرده بودند، ایستاد، که همه آنها رای های همدیگر را از هم ربودند، و این کار به ترامپ اجازه داد انتخابات را <em>به راحتی</em>ببرد. در مورد نخستین دموکرات ها، ترس از تقسیم شدن رأی مانع از انتخاب سندرز به صورت مستقل شد.  همیشه نگرانی وجود داشت که نامزد دیگری مانند جانسون، استین و مک مولین می توانند انتخابات را خراب کنند و همه چیز را از بین ببرند.</p>

        <p style="direction: rtl;">اما دوباره، این در مورد انتخابات 2016 ایالات متحده <em>نیست.</em></p>

        <p style="direction: rtl;"><strong>این مسئله در مورد طراحی یک دموکراسی است که مردم می توانند <em>اعتماد</em> کنند.</strong></p>

        <p style="direction: rtl;">علی رغم تقلب ها زیاد حول انتخابات 2016،<em>نیمی </em>از آمریکایی ها رای ندادند. حتی از کسانی که برای کلینتون / ترامپ<a href="http://www.nytimes.com/interactive/2016/11/08/us/politics/election-exit-polls.html">رای دادند، 20 درصد از آنها گفته بودند که نامزدهای آنها نامعلوم است</a>, <em>ولی به هر حال رای دادند.</em> <a href="https://www.theatlantic.com/international/archive/2016/07/trust-institutions-trump-brexit/489554/">و در سراسر جهان، اعتماد مردم به دولت هایشان</a> و در سراسر جهان، اعتماد مردم به دولت هایشان <em>مربوط به هر دموکراسی در جهان است.</em></p>

        <p style="direction: rtl;">... بله، بدون فشار.</p>

        <p style="direction: rtl;">بازسازی اعتماد یک مشکل پیچیده و بدون راه حل آسان نیست. اما فکر می کنم گام اول آسان <em>است.</em> این یک گام است که می تواند از شر "انتخاب میان بد و بدتر" خلاص شود و به شهروندان ما انتخاب ‌های بیشتری بدهد، انتخاب های <em>بهتر.</em> . و با این حال، این مسئله به اندازه تنظیم بودجه ستاد انتخاباتی یا دستکاری انتخابات یا نبود نمایندگان مناسب دلهره آور نیست، نه، فقط می خواهیم <em>یک برگ کاغذ</em>را تغییر دهیم و چگونگی شمارش این قطعات را بررسی کنیم.</p>

        <p style="direction: rtl;">این ایده مهم ترین مسئله <em>نیست.</em>این همه چیز را حل<em> نمی کند.</em>اما به عنوان اولین گام؟ این بزرگترین انفجار را برای ما به ارمغان می آورد.</p>

        <p style="direction: rtl;"><strong>بیایید در مورد چگونگی ساخت یک رای گیری بهتر صحبت کنیم.</strong></p>

    </div>

    <!-- - - - - - - - -

    PART I:
    THE ALTERNATIVE BALLOTS

    - - - - - - - - - -->

    <div class="banner">
        <img src="{{asset('ballot')}}/img/part1.png"/>
    </div>
    <div class="words">

        <p style="direction: rtl;">در حال حاضر، برخی از شما ممکن است چندین اعتراض داشته باشید!</p>

        <p style="direction: rtl;">
                اعتراض اول .چرا قدرت درسیستم رای گیری  جوری تغییر می کند که قدرت مردم  را  <em>میگیرد؟</em>خوب، اثر اسپویلر قبل از انتخابات پیشنهادی،هزینه های انتخاباتی و انتخابات را به عهده دارد. خلاص شدن از شر این ضعف، پیروزی برای احزاب بزرگ <em>و</em> کوچک است! همچنین اصلاح رأی گیری در حال حاضر در حال افزایش است. فقط ماه گذشته <a href="http://www.nytimes.com/2016/12/03/us/maine-ranked-choice-voting.html">مِین،رای بدیل را تصویب کرد، </a>و
            <s>جاستین تردو،  <a href="http://cdn.pinknews.co.uk/images/2016/02/justin_trudeau.jpg">رئیس خوشگل کانادا،</a> در سال 2017، کشور خود را به سوی یک سیستم رای گیری بهتر حرکت می دهد.</s>
            {{--<b>(UPDATE: ha ha <a href="https://www.theguardian.com/world/2017/feb/01/justin-trudeau-abandons-voter-reform-canada">nope</a>)</b>--}}
        </p>

        <p style="direction: rtl;">اعتراض دوم. آیا بعضی از افراد یک بار ثابت نمی کنند که <em>همه</em> سیستم های رای گیری غیرمنصفانه هستند؟ نه کاملا. شما فکر میکنید <a href="https://en.wikipedia.org/wiki/Arrow%27s_impossibility_theorem">قضیه نامفهوم ممکن است </a> از کنت آرلو، ریاضیدان سالهای 1950 که کل مطالعه سیستم رای گیری را تأسیس کرد باشد.</p>

        <p style="direction: rtl;">دو پاسخ به آن: 1) برخی از سیستم های رأی گیری هنوز هم می توانند عادلانه<em>تر</em>از دیگران باشند، حتی اگر هیچ کدام کامل نیستند. و 2) اثبات کنت آرلو برای همه سیستم های رای گیری اعمال <em>نمی شود.</em> این یک تصور غلط است این فقط در مورد سیستم رای گیری که در آن<em>شما رتبه بندی نامزدها </em>را اعمال می کنید. بعدا، برخی از سیستم های رأی گیری را می بینید که در آن شمانامزد هارا رده بندی  <em>نمی کنید.</em> همراه با سایر گزینه های موجود در سیستم رای دهی فعلی ما.</p>

        <p style="direction: rtl;">اما ابتدا اجازه دهید نگاهی دقیق تر به نظام رای دهی ما داشته باشیم:</p>

    </div>
    <div class="sim-ballot">

        <h2 class="ballot_title" style="margin-bottom: 0.2em;direction: rtl">هر کی اول برندس(FPTP)</h2>
        <p class="ballot_caption" style="direction: rtl;">مثل قبل.روی کاندیداها و رای‌دهنگان <br>کلیک کنید و بکشید</p>

        <iframe src="{{asset('ballot')}}/play/ballot1.html" width="655" height="256" scrolling="no"></iframe>
    </div>
    <div class="words">

        <p style="direction: rtl;"><strong>چگونگی شمارش:</strong>به سادگی آرا را اضافه کنید. هر کسی که بیشترین آراء را کسب کند، برنده خواهد شد.</p>

        <p style="direction: rtl;">به نظر منطقی کافی است اما همانطور که قبلا دیدید، می تواند منجر به یک ایراد عجیب و غریب شود؛ جایی که داشتن دو نامزد <em>خوب</em> می تواند نتیجه انتخابات را به سمت سومین نامزد <em>بد</em> ببرد. به همین دلیل است که بعضی از مردم "به لحاظ استراتژیک" رای می دهند، نه برای کاندید مورد علاقه شان، بلکه از بین بد و بدتر انتخاب می کنند. و رای گیری استراتژیک خوب است ،اما!، از خودتان بپرسید: <b>چگونه می توان انتظار داشت که مقامات منتخب ما صادقانه باشند، زمانی که سیستم رأی گیری ما به ما صادق نباشد؟</b></p>

        <p style="direction: rtl;">بنابراین، برای رفع اثر اسپویلر، سیستم رای گیری دیگر پیشنهاد شده است. مانند...</p>
    </div>
    <div class="sim-ballot">

        <h2 class="ballot_title" style="margin-bottom: 0.15em;direction: rtl">رای گیری انتخابی</h2>
        <p class="ballot_caption" style="direction: rtl;">دوباره کلیک کنید و بکشید</p>

        <iframe src="{{asset('ballot')}}/play/ballot2.html" width="655" height="256" scrolling="no"></iframe>

    </div>
    <div class="words">

        <p style="direction: rtl;"><strong>چگونگی شمارش: </strong>روش های<em>مختلفی</em>برای شمارش این نوع رای گیری وجود دارد. در اینجا، من فقط سه مورد را به شما نشان خواهم داد:</p>

        <p style="direction: rtl;">
            <strong>رای گیری بدیل(IRV): </strong>
            <em>این</em>یکی از محبوب ترین جایگزین برای هرکی اول برندس(FPTP) است.
            استرالیا و ایرلند آن را در انتخابات ملی استفاده می کنند.
            سان فرانسیسکو، مینیاپولیس و پورتلند، مین از آن در انتخابات محلی استفاده می کنند.
            و <s>جاستین ترودو<a href="https://queerty-prodweb.s3.amazonaws.com/wp/docs/2016/02/justintrudeautorontopride.jpg">نخست وزیر کانادا، </a>,
                نیز به  رای بدیل مشتاق است.</s> <b>(UPDATE: nevermind)</b>
        </p>

        <p style="direction: rtl;">
            (توجه داشته باشید: رأی گیری رای بدیل "رای دادن با رتبه بندی انتخاب" نیز نامیده می شود،
            حتی اگر روش های دیگری برای شمارش رأی های رتبه بندی شده وجود داشته باشد.
            IRV نیز اغلب فقط "انتخاب جایگزین" نامیده می شود،
            حتی اگر ده روش دیگر رای گیری  دیگر وجود داشته باشد.
            چه اسم خود خواهانه ای! ایییش!)
        </p>

        <p style="direction: rtl;">IRV کمی پیچیده تر از FPTP است، اما در اینجا چگونه کار می کند:</p>

        <ol style="direction: rtl;">
            <li>شمارش گزینه های #۱</li>
            <li>اگر رای کسی بیش از 50٪ باشد، او برنده خواهند شد! پایان.</li>
            <li>اگر نه، بازنده آخری را حذف می کند.</li>
            <li>دورجدید انتخابات، منهای این بازنده را اجرا کنید.</li>
            <li>تکرار کنید تا کسی 50٪ یا بیشتررای داشته باشد</li>
        </ol>

        <p style="direction: rtl;">اگر بیش از حد به نظر می رسد ، روش بسیار ساده ای از شمارش برگه های رای گیری وجود دارد ...</p>

        <p style="direction: rtl;"><strong>شمارش بوردا:</strong>به سادگی تعداد رتبه بندی را اضافه کنید. مانند گلف، هر کسی که کمترین نمره را داشته باشد، برنده می شود. تعداد بوردا در اسلوونی و تعدادی از جزایر کوچک در میکرونزی استفاده می شود.</p>

        <p style="direction: rtl;">اما اگر بخواهید راه حلی غیر ارادی برای رای دادن داشته باشید، می توانید سعی کنید ...</p>

        <p style="direction: rtl;"><strong>روش کندورسه:</strong>یک انتخاب "شبیه سازی شده" را بین هر جفت نامزد برگزار کنید، با استفاده از اطلاعات در مورد رای دهندگان. اگر کاندیدایی باشد که همه نامزدهای دیگر را در انتخابات "یک به یک" شکست دهد، این نامزد انتخابات واقعی را برنده خواهد کرد. با این حال، این یک "اگر" بسیار بزرگ است. (همانطور که بعدا خواهیم دید ...) فایده این کار این است که وقتی این روش یک برنده را انتخاب می کند، همیشه از نظر تئوریک"بهترین" است. در حال حاضر، این روش توسط هیچ یک از دولت ها استفاده نمی شود و تنها توسط خررررررخون استفاده می شود.</p>

        <p style="direction: rtl;">بنابراین، این سیستم رای گیری است که در آن شما نامزد می شوید - آنهایی که کنت آرلو ثابت کرده اند، همیشه به نوعی غیرمنصفانه هستند! اما از سیستم رای دهی که کاندیدان خود را رتبه بندی نمی کنید چه؟ آنها کمتر شناخته شده هستند، اما در حال حاضر، حداقل شما اون هارو می شناسید:</p>

    </div>
    <div class="sim-ballot">

        <h2 class="ballot_title" style="margin-bottom: 0.15em;direction: rtl">رأی تأیید</h2>
        <p class="ballot_caption" style="direction: rtl;">خب، هنوووووووز هم کلیک کنید و بکشید</p>

        <iframe src="{{asset('ballot')}}/play/ballot3.html" width="655" height="256" scrolling="no"></iframe>

    </div>
    <div class="words">

        <p style="direction: rtl;"><strong>چگونهگی شمارش: </strong>به سادگی تاییدیه ها را اضافه کنید. هر كس بیشترین تاییدیه را دریافت كند، برنده خواهد شد.</p>

        <p style="direction: rtl;"><em>صبر کنید، بیشتر از یک نامزد انتخاب کنید؟ آیا این قانون یک رأی برای هر شخص را نقض نمی کند؟ </em>من از شما میپرسم خوب، رأی شما هرگز علامت تیک نیست، رای شما همیشه کل برگه رای بود. و در این رای گیری، شما صادقانه تمام کاندیداهای مورد تایید خود را، و نه فقط مورد علاقه خود و یا دومین مورد علاقه استراتژیک خود را بیان کنید.</p>

        <p style="direction: rtl;">اما اگر بخواهید یک سیستم رأی دهی بیانگرتری داشته باشید، چرا سعی نکنید ...</p>

    </div>
    <div class="sim-ballot">

        <h2 class="ballot_title" style="margin-bottom: 0.15em;direction: rtl">رای دادن امتیازی</h2>
        <p class="ballot_caption" style="direction: rtl;">شما آن را حدس زدید</p>

        <iframe src="{{asset('ballot')}}/play/ballot4.html" width="655" height="256" scrolling="no"></iframe>

    </div>
    <div class="words">

        <p style="direction: rtl;"><strong>چگونگی شمارش: </strong>به سادگی امتیازات را اضافه کنید. هر کسی که بالاترین نمره را داشته باشد، برنده می شود. مانند نظرات کاربران سایت آمازون، اما با دموکراسی. (توجه: این یک سیستم رتبه بندی نیست، زیرا دو نامزد می توانند  نمره یکسان داشته باشند.)</p>

        <p style="direction: rtl;">بنابراین 6 سیستم رای گیری وجود دارد: یکی که ما استفاده می کنیم و پنج گزینه محبوب. اما چگونه می توانیم بگوییم کدام یک ازاین گزینه ها واقعا بهتر هستند؟ ممکن است آنها چه ایراداتی داشته باشند؟ و کدام سیستم رای گیری - اگر وجود داشته باشد - می توانیم بگوییم "بهترین" است؟</p>

        <p style="direction: rtl;">مثل قبل، بیایید شبیه سازی کنیم.</p>

    </div>

    <!-- - - - - - - - -

    PART II:
    HOW DO THE ALTERNATIVES HOLD UP?

    - - - - - - - - - -->

    <div class="banner">
        <img src="{{asset('ballot')}}/img/part2.png"/>
    </div>
    <div class="words">
        <p style="direction: rtl;">شبیه سازی اثر اسپویلر را از قبل به یاد می‌آورید؟ خوب، در اینجا دوباره، اما حالا شما می توانید بین شش سیستم رأی گیری مختلف تغییر دهید! در اینجا دوباره  شبیه سازی "اثر اسپویلر" . ببینید که چگونه سیستم رای گیری مختلف با اسپویلر های بالقوه برخورد می کند:</p>
    </div>
    <div class="sim-test">
        <p class="caption-test" style="direction: rtl;">
            برای ایجاد یک اثر اسپویلر، فقط  <img src="{{asset('ballot')}}/play/img/hexagon.png"> را<em>به زیر </em> <img src="{{asset('ballot')}}/play/img/triangle.png"> ببرید.<br>
            سپس 6 سیستم رای گیری مختلف را مقایسه کنید:
            <br>
            <span style="font-weight:bold; font-size:0.8em;direction: rtl">
	(توجه داشته باشید: در موارد نادر که مساوی می شود، من فقط به صورت تصادفی یک برنده انتخاب میکنم.)
	</span>
        </p>

        <iframe src="{{asset('ballot')}}/play/election1.html" width="800" height="380" scrolling="no"></iframe>
    </div>
    <div class="words">

        <p style="direction: rtl;">همانطور که می بینید، هر سیستم رای گیری به غیر از هر کی اول برندس از اثر اسپویلر پیروی میکند. پس این درست است؟ دینگ دونگ، ایراد برطرف شده است؟ فقط یک سیستم رای گیری دیگر را انتخاب کنید و با آن کار کنید؟</p>

        <p style="direction: rtl;">اما افسوس. در خلاص شدن از شر یک ایراد، برخی از این سیستم های رای گیری جایگزین سایر ایرادات را ایجاد می کنند - برای برخی، درمان حتی بدتر از این بیماری است.</p>

        <p style="direction: rtl;">به عنوان مثال، در اینجا یک نمونه از رای گیری رانش فوری است. در ابتدا، مثلث <img src="{{asset('ballot')}}/play/img/triangle.png"/> در حال حاضر برنده است و شما قصد دارید رأی دهندگان را حتی نزدیک تر به او حرکت دهید. بدیهی است، اگر یک نامزد قبلا برنده انتخابات شده و محبوب تر شود، باید بعدا هم برنده شود، درست است؟</p>

        <p style="direction: rtl;">شما احتمالا می توانید حدس بزنید کجا این اتفاق می افتد ...</p>
    </div>
    <div class="sim-test">

        <p class="caption-test" style="direction: rtl;">
            رای دهنگان را <img src="{{asset('ballot')}}/play/img/voters.png">آرام به سمت پایین <img src="{{asset('ballot')}}/play/img/triangle.png">بکشید:
        </p>

        <iframe src="{{asset('ballot')}}/play/election2.html" width="800" height="380" scrolling="no"></iframe>

    </div>
    <div class="words">

        <p style="direction: rtl;">چی شد؟
            در ابتدا، <img src="{{asset('ballot')}}/play/img/hexagon.png"/>در دور اول حذف می شود، بنابراین
            <img src="{{asset('ballot')}}/play/img/triangle.png"/>
            در برابر <img src="{{asset('ballot')}}/play/img/square.png"/>ضعیف تر می رود و برنده می شود
            اما وقتی رأی دهندگان به <img src="{{asset('ballot')}}/play/img/triangle.png"/>نزدیک تر می‌شوند،
            بازنده تغییر می کند!
            بنابراین در حال حاضر،<img src="{{asset('ballot')}}/play/img/square.png"/> در دور اول حذف می شود،
            بدین معنی که <img src="{{asset('ballot')}}/play/img/triangle.png"/> به مصاف <img src="{{asset('ballot')}}/play/img/hexagon.png"/>قوی تر می رود و
            از او می بازد.</p>

        <p style="direction: rtl;">تحت روش رای بدیل، ممکن است یک نامزد برنده با کسب محبوبیت بیشتر از دست برود. چه ایرادی!</p>

        <p style="direction: rtl;">چقدر این عملا در زندگی واقعی اتفاق می افتد؟ <a href="https://en.wikipedia.org/wiki/Monotonicity_criterion#Real-life_monotonicity_violations">؟ چند نمونه تایید شده وجود دارد،</a>و <a href="http://www.rangevoting.org/Monotone.html">و ریاضیدانان تخمین می زنند که ایراد حدود 14.5٪ از زمان اتفاق می افتد. اما متأسفانه ما نمی توانیم مطمئن باشیم، زیرا دولت ها معمولا اطلاعات کافی درباره رای گیری را برای بازسازی انتخابات IRV منتشر نمی کنند و نتایج را دوباره بررسی می کنند.</a>  </p>

        <p style="direction: rtl;">بنابراین، نه تنها ایراد "رای بدیل" به اندازه ایراد"هر کی اول برندس" غیر دموکراتیک نیست، احتمالا بدتر است - زیرا در حالی که روش شمارش FPTP ساده و شفاف است، رای بدیل هر چیزی غیر از این است. و کمبود شفافیت امروزه گناه بسیار سنگینی است، زمانی که اعتماد ما به دولت در حال حاضر بسیار پایین است.</p>

        <p style="direction: rtl;">(اما صبر کن ما در مورد خطر رأی گیری استراتژیک بعدا صحبت خواهیم کرد. آیا IRV می تواند سود داشته باشد؟
            در ارتباط باشید ...)</p>

        <p style="direction: rtl;">محبوب ترین جایگزین به کنار، در مورد دومین محبوب ترین، شمارش بوردا چطور؟ در این شبیه سازی ، شما یک نامزد بازنده را به یک نامزد بازنده دیگر نزدیک می کنید. تحت FPTP، اثر اسپویلر رای خود را تقسیم می کند، و هر دو آنها حتی بیشتر از بازنده می‌شوند. اما تماشا کنید که تحت شمارش بوردا چه اتفاقی می افتد در عوض ...</p>

    </div>
    <div class="sim-test">

        <p class="caption-test" style="direction: rtl;">
            <img src="{{asset('ballot')}}/play/img/hexagon.png"> را بکشید به سمت چپ<img src="{{asset('ballot')}}/play/img/square.png">:
        </p>

        <iframe src="{{asset('ballot')}}/play/election3.html" width="800" height="380" scrolling="no"></iframe>

    </div>
    <div class="words">

        <p style="direction: rtl;">بله. شمارش بوردا دارای یک اثر اسپویلر معکوس است. به جای اینکه یک کاندید خوب  با نزدیک شدن به یک نامزد خوب دیگر به او ضرر بزند، با شمارش بوردا، یک نامزد بد میتواند با نزدیک شدن به یک نامزد بد دیگر به او کمک کند.</p>

        <p style="direction: rtl;">در اینجا چیزی اتفاق افتاده است: در ابتدا برخی از رای دهندگان رتبه بندی
            <img src="{{asset('ballot')}}/play/img/square.png"/>&gt;<img src="{{asset('ballot')}}/play/img/triangle.png"/>&gt;<img src="{{asset('ballot')}}/play/img/hexagon.png"/>,
            قرار داشتند، اما زمانی که شما <img src="{{asset('ballot')}}/play/img/hexagon.png"/> را به <img src="{{asset('ballot')}}/play/img/square.png"/>، نزدیکتر کردید
            رایِ رای دهندگان به رتبه بندی
            <img src="{{asset('ballot')}}/play/img/square.png"/>&gt;<img src="{{asset('ballot')}}/play/img/hexagon.png"/>&gt;<img src="{{asset('ballot')}}/play/img/triangle.png"/>چرخید و
            به اندازه کافی<img src="{{asset('ballot')}}/play/img/triangle.png"/>آسیب دید تا
            به <img src="{{asset('ballot')}}/play/img/square.png"/>ببازد.</p>

        <p style="direction: rtl;">با این حال، بوردا بدترین نیست و حداقل آن ساده تر و شفاف تر از رای بدیل است. اما روش کندورسه چگونه مقایسه می کند؟ وقتی کندورسه یک برنده را انتخاب می کند، همیشه به لحاظ تئوریک "بهترین" است - اما زمانی که برنده انتخاب شود.</p>

        <p style="direction: rtl;">تا کنون، من فقط شبیه سازی رای دهندگان را به عنوان یک گروه واحد، با یک مرکز و برخی گسترش یافته در نظر گرفتم. اما وقتی دیدم که چگونه سیاست قطبی شده در حال حاضر، می توان چند گروه از رای دهندگان را با مراکز کاملا متفاوت تصور کرد. در حال حاضر، کندورسه سعی دارد کاندیدایی را انتخاب کند که همه کاندیداهای دیگر را در مسابقات یک به یک ببرد. اما با رای دهندگان قطبی، شما می توانید با یک حلقه "سنگ- کاغذ- قیچی" مانند مواجه شوید، که اکثریت رای دهندگان از A به B، B به C، و C به  A را ترجیح می دهند.</p>

        <p style="direction: rtl;">در شرایط خاص، دیگر سیستم های رأی گیری فقط دچار ضعف بودند. ولی سیستم رای دهی کندورسه سقوط می کند. خودت انرا امتحان کن:</p>
    </div>
    <div class="sim-test">

        <p class="caption-test" style="direction: rtl;">
            "چرخه کندورسه" خود را ایجاد کنید!<br>
            رای‌دهنگان  <img src="{{asset('ballot')}}/play/img/voters.png"> را به گونه ای حرکت دهید که هیچ کس برنده نشود:
        </p>

        <iframe src="{{asset('ballot')}}/play/election4.html" width="800" height="380" scrolling="no"></iframe>

    </div>
    <div class="words">

        <p style="direction: rtl;">در حال حاضر، در عمل هیچ دولتی از این سیستم رأی گیری استفاده نمی کند  زمانی که کندورسه موفق به یافتن یک برنده نشد، انتخابات به روش دیگری مانند شمارش بوردا بازمی گردد. اما اگر شما این کار را انجام دهید، دچار ایرادات روش های پشتیبانیش می شود. همینطوری.</p>

        <p style="direction: rtl;">هرکی اول برندس، رای بدیل،شمارش بوردا، روش کندورسه. اینها همه سیستم های رأی گیری بودند که از رتبه بندی استفاده می کردند - آنهایی که پسر ریاضی ما، کنت آرلو ثابت کرد، همیشه به نوعی بی عدالتی و ناخوشایند هستند.سیستم های رأی گیری که از رتبه بندی استفاده نمی کنند چطورند؟ مانند تصویب و رأی گیری نمره. خب...</p>

        <p style="direction: rtl;">... نمیتوانم شبیه سازی کنم تا معایب آنها را نشان بدهم.به خاطر اینکه، در تئوری، آنها دارای نقایص زیادی نیستند.</p>

        <p style="direction: rtl;">
            اما این واقعا، واقعا واقعا واقعا خیلی "تئوریکه"!
            ممکن است این باشد که در عمل، رای دهندگان استراتژیک از تأیید و رأی گیری نمره دقیقا مانند هرکی اول برندس استفاده می کنند –
            تنها تصویب یا دادن 5 ستاره به کاندیدای برتر خود و عدم تایید یا دادن 1 ستاره به همه دیگران،
            حتی اگر آنها واقعا دیگران را دوست دارند.
            <a href="http://www.fairvote.org/why-approval-voting-is-unworkable-in-contested-elections">(نقد تصویب رای گیری FairVote را در مورد رأی گیری تصدیق و دفاع از رای بدیل ببینید)</a>
        </p>

        <p style="direction: rtl;">
            سپس دوباره، حتی اگر تصویب و نمره رأی گیری شما را از بیان یک انتخاب دوم صادقانه،
            FPTP و IRV شما را برای بیان یک انتخاب اول صادقانه مجازات می کند.
            علاوه بر این، اگر تصویب "بازی داده شود"، سپس کار IRV دو برابر است.
            <a href="http://www.rangevoting.org/LNH.html">(نگاهی به این نقد ریاضیدان از نقد FairVote و دفاع از تصدیق) </a>
            بنابراین، در پایان ... [صدای بی حال]</p>

        <p style="direction: rtl;">
            ما به شبیه سازی های خیلی بیشتر نیاز داریم.
        </p>

        <p style="direction: rtl;">
            بنابراین، در زیر یک نمودار
            <a href="https://electology.org/tactical-voting-basics">(منبع)</a>,
            است که نتایج 2.2 میلیون شبیه سازی را نشان می دهد.
            انواع مختلفی از سناریوها مورد آزمایش قرار گرفتند.
            رأی دهندگان صادقانه.رأی دهندگان تمام استراتژی .نیمه صادقانه، نیمه استراتژیک.
            رأی دهندگانی که اولویت های یکدیگر را می دانند.
            رأی دهندگانی که اولویت یکدیگر را نمی دانند.
            رأی دهندگانی که اولویت یکدیگر را تاحدودی می دانند.
            و همینطور تا آخر
            شما می توانید بگویید که یک ریاضیدان واقعی این نمودار را ساخته است،
            بخاطر اینکه داره از چشمای من خون میاد:
        </p>

        <p style="direction: rtl;"><img class="real" src="{{asset('ballot')}}/img/comparison.png"></p>

        <p style="direction: rtl;">
            نتایج هر روش رای گیری با نوار آبی نشان داده شده است.
            هرچه روش رأی گیری بیشتر به سمت راست باشد، بیشتر «موجب خوشحالی» برای رای دهندگان می شود.
            بالاترین روش رای گیری، ساده ترین است.
            و عرض نوار،طیف وسیعی از عملکرد سیستم رای دهی را نشان می دهد،
            با توجه به نسبت های مختلف رای دهندگان صادق به استراتژیک.
        </p>

        <p style="direction: rtl;">
            اولین چیزی که باید توجه داشته باشید این است که رای گیری استراتژی باعث می شود رای دهندگان نسبت به رای دادن صادقانه کمتر خوشحال باشند
            در همه سیستم های رای گیری! وقتی اولین بار آن را آموختم بسیار تعجب کردم.
            (اما منطقیه، اگر فکر میکنید، یک اتاق شلوغ از افرادی است که می خواهند صحبت کنند، هرکسی میتواند با «فریاد بر روی دیگران» «استراتژیک» باشد، اما اگر همه «استراتژیک» باشند، کسی نمیتواند کسی را بشنود و همه دچار گلو درد و خستگی های غم انگیز می شوند.)</p>

        <p style="direction: rtl;">چیز دیگری که باید بدانید این است که کدام سیستم رای گیری مردم را شادتر می کند. اگر بیشتر رای دهندگان صادق داشته باشید، امتیاز رای دادن بهترین است. ( با اختلاف کم از شمارش بوردا ) و اگر شما بیشتر رای دهندگان استراتژیک داشته باشید، پس هر دو روش تایید و نمره  بهترین هستند. (و با رای دهندگان استراتژیک، IRV به همان اندازه بد است که FPTP)</p>

        <p style="direction: rtl;">با این حال، این هنوز هم شبیه سازی کامپیوتری است. چگونه این سیستم رای دهی متفاوت در زندگی واقعی عملی می شود؟ خب، ما نمی توانیم کمپانی ده لورین را تا 88 بالا ببریم، به قبل از انتخابات 2016 برویم، سیستم رای گیری را تغییر دهیم و ببینیم چه اتفاقی می افتد ...</p>

        <p style="direction: rtl;">... یا می توانیم ؟!</p>

        <p style="direction: rtl;">نه، ما نمی توانیم. اما ماه گذشته، محققان چیزی نزدیک به اندازه کافی انجام دادند.
            <a href="http://www.vox.com/policy-and-politics/2016/11/25/13733322/instant-runoff-ranked-voting-2016">یک نظرسنجی از 1000 نفر از رای دهندگان ثبت شده در ایالات متحده خواسته بود که شش نامزد ریاست جمهوری را رتبه بندی کنند و شش نفر را انتخاب کنند </a>,
            مشخص شود که کدام کاندید (محبوب) تحت سیستم‌های رای گیری مختلف می‌برند!
            (اما در نظر داشته باشید که اگر ما یک سیستم رأی گیری متفاوت در مقدماتی داشته باشیم، کاندیداهای کاملا مختلفی داشته باشیم،
            بنابراین این مطالعه را با صبر زیاد انجام دهید.)
            نتایج: با روش های رای بدیل ، کندورسه و تایید رای گیری، برنده هیلاری کلینتون بوده است. اما تحت رأی دادن امتیاز، برنده دونالد ترامپ بود. و بر اساس شمار بوردا، برنده شده  ... اوووه ... گری جانسون؟
        </p>

        <p style="direction: rtl;"><em>؟؟؟؟؟</em></p>

    </div>
    <div class="sim-test">
        <p class="caption-test" style="direction: rtl;">
            یک مدل حدس زده از انتخابات سال 2016 ایالات متحده؟ ...<br>
            <span style="font-weight:100; font-size:0.85em">
	چگونه کلینتون <img src="{{asset('ballot')}}/play/img/square.png"> برنده IRV می شود،
	ترامپ <img src="{{asset('ballot')}}/play/img/hexagon.png">برنده امتیازی می شود،
	و جانسون <img src="{{asset('ballot')}}/play/img/triangle.png"> برنده‌ی بوردا می‌شود؟
	</span>
        </p>
        <iframe src="{{asset('ballot')}}/play/election5.html" width="800" height="380" scrolling="no"></iframe>
    </div>
    <div class="words">

        <p style="direction: rtl;">به هر حال.</p>

        <p style="direction: rtl;">قبل از اینکه مسئله را جمعش کنیم- کنت آرلو را به یاد دارید؟ ریاضیدان مشهور که در سال 1950 مطالعه سیستم رای گیری را تأسیس کرد؟ خب،<a href="https://electology.org/podcasts/2012-10-06_kenneth_arrow">60 سال بعد، کنت آرلو در مصاحبه‌ای </a>درباره روش رای گیری که بیشتر دوست دارد، گفت:</p>

        <p class="quote" style="direction: rtl;">
           "خب، من کمی تمایل به فکر کردن در مورد سیستم های نمره مانند تایید و رأی دهی امتیازی دارم که در آن شما ممکن است سه یا چهار کلاس را طبقه بندی کنید (بنابراین با دادن نمره 3 یا 4، نه 10 یا 100) احتمالا با وجود آنچه که در مورد دستکاری [رای گیری استراتژیک] گفتم - احتمالا بهترین است. "</p>

        <p>این قدرت هنگامی بدست می آید که از مغز یک ریاضیدان استفاده کنید.</p>
    </div>

    <!-- - - - - - - - -

    PART III:
    CONCLUSION. OPEN LETTER

    - - - - - - - - - -->

    <div class="banner">
        <img src="{{asset('ballot')}}/img/part3.png"/>
    </div>
    <div class="words">

        <p style="direction: rtl;"><em>اِهِم</em></p>

        <p style="text-align:center;direction: rtl">
            <strong style="font-size:1.4em">
                <s>جاستین عزیز <a href="http://www.newyorker.com/wp-content/uploads/2016/03/Borowitz-Justin-Trudeau.jpg">"تات ابروز"</a> ترودو</s>
            </strong>
            <br>
            <b style="font-size:0.8em">(به روز رسانی:همه‌ی عزیزان سراسر جهان در تلاش برای اصلاح رأی گیری)</b>
        </p>

        <p style="direction: rtl;">با تشکر از شما برای برداشتن این گام کوچک اما قدرتمند! ما برای طولانی مدت شناخته ایم که سیستم رای دهی فعلی ما – هر کی اول برندس - باعث رأی دادن مردم به ناسازگاری می شود، سناریوی "بین بد و بدتر" را ایجاد می کند و پیچ ها را بر روی هر دو نامزد اصلی و کوچک قرار می دهد.</p>

        <p style="direction: rtl;">
            با این حال، احتمالا فقط با توجه به رای گیری رای بدیل در نظر گرفته شده است.
            کدام بهتر است که از هرکی اول برندس بهتر باشد،
            ، و اگر انتخاب بین آن دو باشد، مطمئنا سراغ رای بدیل بروید.
            اما IRV همچنان ایرادی غیر دموکراتیک به اندازه ایراد FPTP و
            بدتر از آن دارد، در دوران ناآرامی ما کمبود شفافیت رای بدیل برای دموکراسی کشنده است.
            . بله مطمئنا IRV بهترین سیستم رای گیری بود که ما می توانستیم در سال
            <a href="https://en.wikipedia.org/wiki/History_and_use_of_instant-runoff_voting">۱۸۷۰</a>ارائه دهیم.
            از آن زمان IRV بر این گفتگو غلبه دارد و
            به طور ناخواسته کل دعوای اصلاحات رای دهی را "ساده یا پر معنی" تشکیل می دهد.
        </p>

        <p style="direction: rtl;">
            <b>اما این انتخاب غلط است. </b> با تشکر از شبیه سازی های کامپیوتری، مطالعات زندگی واقعی و دسته ای از رشته های ریاضی،
            <b>ما اکنون  سیستم های رأی گیری که  ساده  <i>و</i> واضح هستند را می شناسیم.</b>
        </p>

        <p style="direction: rtl;">
            <i>شخصا</i>، من به رأی دادن امتیازی اهمیت میدهم.
            این ساده و بسیار واضح است و برای هر کسی که سیستم بازبینی "پنج ستاره" آمازون یا Yelp را دیده است، آشنا است.
            اما این فقط نظر فروتنانه من است.
            شما همچنین می توانید مطرح کنید که رای دهی تصدیق شده <i>عملی تر</i>است،
            ، زیرا حتی ساده تر است، و در حال حاضر با دستگاه های رای گیری موجود کار می کنند!</i>
            همه شما باید این دستورالعمل را از
            "رای دادن به نامزدی که دوست دارید" به "رای دادن به نامزد<b class="underline">هایی</b> که دوست دارید" را تغییر دهید.
        </p>

        <p style="direction: rtl;">
            یا شاید من به طور کامل در مورد رد رای بدیل اشتباه کرده ام، و در واقع خیلی خوب است.
            چه بسا، شما حتی می توانید به عنوان یک شوخی خنده دار شمارش بوردا انجام دهید.
        </p>

        <p style="direction: rtl;">من ادعا نمی کنم که کدام سیستم رأی گیری بهترین است. من این بحث را باز می کنم، تا زمانی که ما این بحث را داشته باشیم. به سه دلیل:</p>

        <p style="direction: rtl;">1) 1) اگر من ادعا کنم یک سیستم رأی گیری بهترین است، پایان داستان، تمام دلواپسای تئوری انتخاب اجتماعی قراره از سو و کول من بالا بروند و فریاد بزنند<a href="http://www.law.uchicago.edu/faculty/research/eric-posner-quadratic-vote-buying-efficient-corporate-governance/qanda">پس نیکی خریدن رای ها چی میشه؟</a></p>

        <p style="direction: rtl;">2) ما هنوز باید این سیستم های رای گیری جایگزین را با تجربه واقعی تجربه کنیم،
            <span style="text-decoration:line-through">نه فقط هجوم جنگ های شعله ور اینترنت بین طرفداران IRV و نظریه ی طرفداران رأی دهی امتیازی.</span>
            بیشتر برای شهرهای کوچک، دولت های محلی و ملت های مانند کانادا برای پیشگام شدن، برای آزمایش شجاعانه!</p>

        <p style="direction: rtl;">3) نگه داشتن بحث در حال انجام، دموکراسی چیست؟</p>

        <p style="direction: rtl;"><a href="http://www.journalofdemocracy.org/article/danger-deconsolidation-democratic-disconnect">مطالعه اخیر</a> نشان داد که در بسیاری از کشورهای غربی - از سوئد تا استرالیا تا ایالات متحده - حمایت از دموکراسی در چندین نسل گذشته کاهش یافته است.
            در سال 2011، تقریبا یک چهارم کامل از جوانان آمریکایی گفتند که دموکراسی یک راه بد یا بسیار بد برای راه اندازی یک کشور است.
            و امروز، یکی از شش کاندید آمریکایی می گوید که می تواند "خوب" یا "بسیار خوب" باشد وقتی که تحت حاکمیت واقعی نظامی باشد.</em>.
        </p>

        <p style="direction: rtl;">بی اعتمادی ما عمیق تر از جزئیات فنی یک سیستم رای گیری می باشد. یک ترفند عجیب برای اصلاح دموکراسی وجود ندارد. اما به عنوان قدم اول، یک میوه کوچک حلق آویز، راهی برای نشان دادن آن، بله، شما سیستم را مجبور به پاسخ دادن به نیازها و خواسته ها و آرزوهای مردم خود می کنید - خب، در کل درست کردن سیستم رأی گیری ما یک شروع خوب است.</p>

        <p style="direction: rtl;">به خاطر اینکه این فقط در مورد تلاش برای ایجاد یک رای گیری بهتر نیست.</p>

        <p style="direction: rtl;">این در مورد تلاش برای ایجاد یک دموکراسی بهتر است.</p>



        <hr>

        <p style="direction: rtl;"><strong>توجه:</strong> از آنجا که شما این را مطالعه کرده اید و تمام اینها را بازی کرده اید، در اینجا جایزه بگیرید!
            "حالت ماسه‌بازی" شبیه ساز انتخابات، تا پنج نامزد.
            شما همچنین می توانید سناریوی انتخابات سفارشی خود را با دیگران ذخیره و به اشتراک بگذارید. شبیه سازی خوش بگذره!</p>
    </div>


    <!-- - - - - - - - -

    PART IV:
    SANDBOX

    - - - - - - - - - -->

    <div id="sandbox">
        <div class="sim-sandbox">
            <h1 class="caption-test" style="margin: 30px 0 15px 0;direction: rtl"> <a style="text-decoration: none;" href="{{asset('ballot')}}/sandbox">حالت ماسه‌بازی!</a></h1>
            <iframe src="{{asset('ballot')}}/sandbox/sandbox.html" width="802" height="508" scrolling="no"></iframe>
        </div>
        <div class="words">
            <p style="direction: rtl;">
                یک امید برای Sandbox Mode (حالت جعبه شنی) این است که خوانندگان می توانند با من و یکدیگر با استفاده از این ابزار بحث کنند!
                نه تنها به من می گوید که من اشتباه کرده ام،بلکه به من نشان می دهند اشتباه می کنم.
                به عنوان مثال
                <a href="{{asset('ballot')}}/sandbox?m=%7B%22s%22%3A%22FPTP%22%2C%22v%22%3A%5B%5B54%2C147%5D%2C%5B54%2C72%5D%2C%5B249%2C109%5D%5D%2C%22c%22%3A%5B%5B54%2C227%5D%2C%5B249%2C106%5D%5D%2C%22d%22%3A%22This%20is%20the%20biggest%20challenge%20to%20Approval%2FScore%2C%20IMHO.%20Below%3A%202%2F3%20of%20voters%20dislike%20both%20candidates%2C%20but%20dislike%20Square%20slightly%20less.%20However%2C%201%2F3%20of%20voters%20LOVE%20Triangle%20and%20HATE%20Square.%20Under%20FPTP%2C%20IRV%20%26%20Condorcet%2C%20Square%20wins%2C%20coz%20a%20majority%20of%20voters%20barely%20prefer%20him.%20But%20under%20Approval%20%26%20Score%2C%20Triangle%20wins%2C%20coz%20she's%20intensely%20loved%20by%20her%20minority.%20Now%2C%20is%20this%20OKAY%3F%20Is%20this%20a%20betrayal%20of%20democracy%2C%20or%20actually%20*saving*%20democracy%20from%20a%20tyranny%20of%20the%20majority%3F%20This%20question's%20not%20just%20theoretical%2C%20it's%20*philosophical*.%22%7D">
                    در اینجا من یک مدل در Sandbox Mode ساخته ام،
                    نشان دادن استدلال جالبی در مورد تایید و رأی گیری امتیازی.</a>.
                بدیهی است، این ابزار بسیار محدود است - رأی گیری استراتژیک و یا اطلاعات ناقص را مدیریت نمی کند -
                اما من فکر می کنم که این شروع است و می تواند گفتمان دموکراتیک ما را بهبود بخشد.
            </p>
        </div>
    </div>

    <!-- - - - - - - - -

    PART V: THE END
    - What Can I Do?
    - Social Sharing
    - Credits
    - Stay In Touch

    - - - - - - - - - -->

    <div id="end">
        {{--<div id="credits">

            <!-- Public Domain -->
            <div id="uncopyright">
                <img src="{{asset('ballot')}}/img/public_domain.png" width="180">
                <div style="float:right; width:750px; font-size:20px; color:#999;">
                    <div style="font-size:91px; height:97px; color:#fff; position: relative; left: -5px; line-height: 1em;"><b>PUBLIC DOMAIN</b></div>
                    <a href="https://creativecommons.org/publicdomain/zero/1.0/" target="_blank">Zero rights reserved.</a>
                    I'm giving away
                    all my art/code/words,
                    so that you
                    teachers, mathematicians, hobbyists, activists, and policy wonks
                    can use them however you like!
                    This is for you.
                    <a href="https://github.com/ncase/ballot" target="_blank">Get my source code on GitHub!</a>
                </div>
            </div>

            <div id="appendix_container">

                <!-- Further Reading -->
                <div id="further_reading">

                    <div class="appendix_title" style="font-size:50px; line-height:50px">“BUT WHAT CAN <em>I</em> DO?”</div>

                    <p>
                        <b>For citizens:</b> Remember, <i>think global, but act local</i>.
                        Change from the bottom-up lasts longer.
                        If you're in the US,
                        <a href="http://www.house.gov/representatives/find/">find your representative</a>
                        and badger 'em.
                        If you're in Canada,
                        <a href="http://www.lop.parl.gc.ca/ParlInfo/compilations/houseofcommons/memberbypostalcode.aspx">find your Member of Parliament</a>
                        and badger 'em.
                        Also if you're Canadian,
                        <a href="https://www.mydemocracy.ca/">fill out the MyDemocracy.ca survey before the end of 2016!</a>
                        This survey has a few questions specifically about voting reform!
                        (sadly, the question is <i>still</i> framed as "simple vs expressive".
                        <i>that</i> is why i've been so gung-ho about Approval &amp; Score,
                        and maybe a bit too mean towards IRV)
                    </p>

                    <p>
                        <b>For learners:</b>
                        Watch CGP Grey's <a href="https://www.youtube.com/playlist?list=PL7679C7ACE93A5638"><i>Politics in the Animal Kingdom</i></a> series!
                        It's charming, and covers more ground than I did here – it explains
                        gerrymandering, proportional representation, and more.
                        Also, read <a href="https://www.amazon.com/Gaming-Vote-Elections-Arent-About/dp/0809048922"><i>Gaming The Vote</i></a> by
                        William Poundstone.
                        It's a thrilling read,
                        with dramatic human stories of crooks &amp; conmen trying to game our glitchy voting systems –
                        and sometimes, succeeding.
                    </p>

                    <p>
                        <b>For teachers:</b>
                        This entire "explorable explanation" is public domain, copyright-free,
                        meaning you <i>already</i> have permission to use this freely in your classes!
                        You can even use the <a href="{{asset('ballot/sandbox')}}">Sandbox Mode</a> to create your own material,
                        or as a tool for students to make something on their own.
                    </p>

                    <p>
                        <b>For coders:</b>
                        This is all open source!
                        So you can <a href="https://github.com/ncase/ballot">get my code on GitHub</a>, and remix it to your heart's content.
                        (sorry in advance for my messy code)
                    </p>

                    <p>
                        <b>Check out these organizations:</b>
                        Though they may differ on what voting system they like best,
                        they all have a common goal: to reform the one we have.
                        <a href="https://electology.org/">Electology</a> likes Approval Voting most,
                        <a href="http://www.fairvote.org/">FairVote</a> likes Instant Runoff most,
                        and <a href="http://rangevoting.org/">RangeVoting.org</a> likes Score Voting most.
                    </p>

                    <div class="appendix_title" style="font-size:36px; line-height:50px; margin-top:35px;">ON THE SHOULDERS OF GIANTS</div>
                    <p>
                        This "explorable explanation" was directly inspired by these two projects:
                    </p>
                    <img src="{{asset('ballot')}}/img/zesty.png" style="width:100%"/>
                    <p>
                        <a href="http://zesty.ca/voting/sim/">Voting Sim Visualization</a> by Ka-Ping Yee (2005)
                        was a real eye-opener.
                        (hat tip to <a href="https://twitter.com/worrydream/status/781324328054951936">Bret Victor</a> for sharing it with me!)
                        I've heard lots of written debate over FPTP vs IRV vs Condorcet vs Approval vs blah blah blah,
                        but I'd never seen their difference <i>visualized</i> so clearly!
                        It gave me instant insight.
                        And it actually changed my mind – I used to think IRV was pretty good,
                        but after seeing IRV's <i>messiness</i> (as shown above), I realized it's actually kinda stinky cheese.
                    </p>
                    <p>
                        However, even <i>this</i> brilliant visualization was still too abstract.
                        And since it wasn't interactive, I couldn't test the many questions &amp; scenarios that came to mind.
                        So that's why my second inspiration was...
                    </p>
                    <img src="{{asset('ballot')}}/img/ladder.png" style="width:100%"/>
                    <p>
                        <a href="http://worrydream.com/LadderOfAbstraction/">Up and Down the Ladder of Abstraction</a>
                        by Bret Victor (2011).
                        It's one of the web's earliest "explorable explanations" (also a term Bret coined)
                        and it is <i>gorgeous</i>.
                        Obviously, I borrowed the format of mixing words &amp; "games" to explain things,
                        but I also followed the formula of starting concrete – one voter –
                        then moving up to the more abstract – a whole election.
                    </p>
                    <p>
                        <a href="http://explorableexplanations.com/">
                            You can learn more about Explorable Explanations here.</a>
                    </p>
                    <p>
                        And last but not least, thank you to all the math &amp; policy nerds
                        who spent way too much time thinking about all this.
                    </p>

                    <div class="appendix_title" style="font-size:47px; line-height:50px; margin-top:35px;">
                        STAY IN TOUCH, MAYBE?</div>
                    <p>
                        Every once in a while, I'll fall into an endless rabbithole –
                        like this one on voting systems – and slowly crawl my way out, bloodied and bruised,
                        with a new interactive thing for you!
                        If you wanna find out
                        when I finally get around to making new shtuff, you can...
                    </p>
                    <ul>
                        <li>
                            <a href="https://twitter.com/ncasenmare">Follow me on Twitter</a>
                        </li>
                        <li>
                            <a href="https://www.patreon.com/ncase">Buy me a hot chocolate via Patreon</a>
                        </li>
                        <li>
                            <a href="http://us11.campaign-archive2.com/home/?u=07d288de26e77b8126d33e2d6&id=5c3178c4cb">I also have a mailing list???</a>
                        </li>
                    </ul>
                    <p>
                        And if you wanna see more of my past projects,
                        <a href="http://ncase.me/">check out my wobsite!</a>
                    </p>
                    <p>
                        See you again soon! Have a Happy New Year 2017, or try to, anyway.
                    </p>

                </div>

                <!-- Supporters and Special Thanks -->
                <div id="supporters">
                    <div class="appendix_title" style="text-align:center; height:22px">A BIG THANKS TO ALL MY</div>
                    <div class="appendix_title" style="text-align:center; font-size: 46px; margin: 10px 0 15px 0;">SUPPORTERS</div>
                    <a href="https://www.patreon.com/ncase" target="_blank">
                        <img src="{{asset('ballot')}}/img/patreon.png" width="320">
                    </a>
                    <div id="supporter_drawings">
                        <div><img src="{{asset('ballot')}}/rewards/aimee.png"><div>aimee jarboe</div></div>
                        <div><img src="{{asset('ballot')}}/rewards/frank.png"><div>frank leon rose</div></div>
                        <div><img src="{{asset('ballot')}}/rewards/jared.png"><div>jared cosulich</div></div>
                        <div><img src="{{asset('ballot')}}/rewards/louis_jean.png"><div>louis-jean teitelbaum</div></div>
                        <div><img src="{{asset('ballot')}}/rewards/matt.png"><div>matt hughes</div></div>
                        <div><img src="{{asset('ballot')}}/rewards/micah.png"><div>micah cowan</div></div>
                        <div><img src="{{asset('ballot')}}/rewards/michael.png"><div>michael alan huff</div></div>
                        <div><img src="{{asset('ballot')}}/rewards/natalie.png"><div>natalie sun</div></div>
                        <div><img src="{{asset('ballot')}}/rewards/noel.png"><div>noel lehmann</div></div>
                        <div><img src="{{asset('ballot')}}/rewards/phil.png"><div>phil dougherty</div></div>
                        <div><img src="{{asset('ballot')}}/rewards/tom_c.png"><div>tom cascio</div></div>
                        <div><img src="{{asset('ballot')}}/rewards/tom_k.png"><div>tom knowles</div></div>
                    </div>
                    <div style="overflow:hidden; clear:both">
                        <div style="margin-bottom:25px; text-align:center; overflow:hidden;">
                            <div style="width:160px; float:left">
                                Adam M. Smith<br>
                                Alex Dytrych<br>
                                Andrew <br>
                                Andy <br>
                                Artemiy Solopov<br>
                                Aschelon <br>
                                ben fei<br>
                                Benjamin Riggs<br>
                                Bob Wise<br>
                                Brandon <br>
                                Brent Werness<br>
                                Brian Wu<br>
                                Bruno Guerrero<br>
                                Buster Benson<br>
                                Casey Ross<br>
                                Charlie McIlwain<br>
                                Christopher <br>
                                Colin <br>
                                Colin <br>
                                Cort Stratton<br>
                                Craig Steele<br>
                                Daniel Horowitz<br>
                                Daniel Shiffman<br>
                                Dave Tu<br>
                                David Smit<br>
                                Dylan Meconis<br>
                                Fahrstuhl <br>
                                Feiya Wang<br>
                                Forrest Oliphant<br>
                                Frank Leon Rose<br>
                                Henry Reich<br>
                                Iñaki <br>
                                J. Hu<br>
                                Jacob Christian Munch-Andersen<br>
                                Jacques Frechet<br>
                                James Hogan<br>
                                Janusz Leidgens<br>
                                John_Ca <br>
                                Johnny Owens<br>
                                Joseph Perry<br>
                                Joshua Horowitz<br>
                                Julia Karmo<br>
                                Karen Cooper<br>
                                Kat Suricata<br>
                                Kate Fractal<br>
                                Kathryn Long<br>
                                Kevin <br>
                                Kevin Wang<br>
                            </div>
                            <div style="width:160px; float:left">
                                Klemen Slavic<br>
                                kuerqing1024 <br>
                                Linda Booth Sweeney<br>
                                Maic Lopez Saenz<br>
                                Matt "Kupo" Roszak<br>
                                Matt Warren<br>
                                May-Li Khoe<br>
                                Mekki MacAulay<br>
                                Micah Cowan<br>
                                Michael Duke<br>
                                Michelle Brown<br>
                                Michelle Kelly<br>
                                Milan Pingel<br>
                                Monika Denes<br>
                                Mustafa Alic<br>
                                Nick Schrag<br>
                                Nikita<br>
                                Noah Swartz<br>
                                Pablo Lopez Soriano<br>
                                Pat Mächler<br>
                                Peter McEvoy<br>
                                Philip Tibitoski<br>
                                Piotr Migdal<br>
                                Rachel Nabors<br>
                                Raphael D'Amico<br>
                                Richard Hackathorn<br>
                                Rob Napier<br>
                                Roland Tanglao<br>
                                Ryan Barker<br>
                                Sam Anderson<br>
                                Sam Maynard<br>
                                Samira Nedungadi<br>
                                Sarah Barbour<br>
                                sarah mathys<br>
                                SB Sigma<br>
                                Seanny123 <br>
                                Serguei Filimonov<br>
                                Sigpipe <br>
                                Sylvain Francis<br>
                                Syria Carys Sirlay<br>
                                T_Caramel <br>
                                TisGood <br>
                                Tony Onodi<br>
                                Traci Lawson<br>
                                Yona <br>
                                Yu-Han Kuo<br>
                                Zach Smith<br>
                                Zoe Bogner
                            </div>
                        </div>
                    </div>
                    <div class="appendix_title" style="text-align:center;">AND SPECIAL THANKS TO</div>
                    <div style="margin-top:15px; text-align:center;">
                        <div style="width:160px; float:left">
                            Alex Dytrych<br>
                            Alex Jaffe<br>
                            Brian Bucklew<br>
                            Chris Walker<br>
                            Christine Zhang<br>
                            Dan Zajdband<br>
                            Daniel Cook<br>
                            Droqen<br>
                            Jason Grinblat<br>
                        </div>
                        <div style="width:160px; float:left">
                            Jessie Salz<br>
                            Lisa Charlotte Rost<br>
                            Martin Shelton<br>
                            Patrick Dubroy<br>
                            Pietro Passarelli<br>
                            Sandhya Kambhampati<br>
                            Tanya Short <br>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div style="text-align:center; color:#fff;">
            sharing is caring!
            <ul class="share-buttons">
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fncase.me%2Fballot%2F&t=To%20Build%20a%20Better%20Ballot" title="Share on Facebook" target="_blank"><img alt="Share on Facebook" src="{{asset('ballot')}}/social/Facebook.png"></a></li>
                <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fncase.me%2Fballot%2F&text=Woah%2C%20check%20out%20this%20interactive%20guide%20to%20alternative%20voting%20systems!%20To%20Build%20a%20Better%20Ballot%3A%20http%3A%2F%2Fncase.me%2Fballot%2F&via=ncasenmare" target="_blank" title="Tweet"><img alt="Tweet" src="{{asset('ballot')}}/social/Twitter.png"></a></li>
                <li><a href="{{asset('ballot')}}/mailto:?subject=To%20Build%20a%20Better%20Ballot&body=An%20interactive%20guide%20to%20alternative%20voting%20systems:%20http%3A%2F%2Fncase.me%2Fballot%2F" target="_blank" title="Send email"><img alt="Send email" src="{{asset('ballot')}}/social/Email.png"></a></li>
            </ul>
        </div>
    </div>--}}

    </div>
</div>
</body>
<script src="js/ballot/ballot.js"></script>
</html>
