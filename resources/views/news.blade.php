<!DOCTYPE html>
<html>
    <head>
        <style>
            .dropbtn {
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #ddd;}

            .dropdown:hover .dropdown-content {display: block;}

            .dropdown:hover .dropbtn {background-color: #3e8e41;}
        </style>
    </head>
    <body>
        <h1>Latest News</h1><hr>
        <div class="dropdown">
            <button class="dropbtn">sorting</button>
            <div class="dropdown-content">
                <a href="http://inovola.localhost/api/NewsOrderByDatetimeAsc">asc Date&Time</a>
                <a href="http://inovola.localhost/api/showNews">desc Date&Time</a>
                <a href="http://inovola.localhost/api/NewsOrderByRatingAsc">asc Rating</a>
                <a href="http://inovola.localhost/api/NewsOrderByRatingDesc">desc Rating</a>
            </div>
        </div>
        @foreach($news as $value)
            <h3>{{$value->title}}</h3>
            <h4>{{$value->content}}</h4>
            <h4>{{$value->datetime}}</h4>
            <h4>{{$value->rating}}</h4>
            <h4>{{$value->agency}}</h4>
            <hr>
        @endforeach
    </body>
</html>
