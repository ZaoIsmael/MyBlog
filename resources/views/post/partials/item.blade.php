<article class="box post post-excerpt">
    <header>
        <!--
            Note: Titles and subtitles will wrap automatically when necessary, so don't worry
            if they get too long. You can also remove the <p> entirely if you don't
            need a subtitle.
        -->
        <h2><a href="#">{{$post->title}}</a></h2>
    </header>
    <div class="info">
        <!--
            Note: The date should be formatted exactly as it's shown below. In particular, the
            "least significant" characters of the month should be encapsulated in a <span>
            element to denote what gets dropped in 1200px mode (eg. the "uary" in "January").
            Oh, and if you don't need a date for a particular page or post you can simply delete
            the entire "date" element.

        -->
        <span class="date"><span class="month"> {{$post->created_at->format('F')}} <span>y</span></span> <span class="day"> {{$post->created_at->format('j')}} </span><span class="year">, {{$post->created_at->format('Y')}} </span></span>
        <!--
            Note: You can change the number of list items in "stats" to whatever you want.
        -->
        <ul class="stats">
            <li><a href="#" class="icon fa-comment">16</a></li>
            <li><a href="#" class="icon fa-twitter">64</a></li>
            <li><a href="#" class="icon fa-facebook">128</a></li>
        </ul>
    </div>
    <a href="#" class="image featured"><img src="http://my.blog/assets/images/pic01.jpg" alt="" /></a>
    <p> {{$post->description}} </p>
</article>