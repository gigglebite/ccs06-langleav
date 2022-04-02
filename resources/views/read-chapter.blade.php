<html>
<head>
<title>Web Reader</title>
</head>
<body>
<div class ="book_container">
<h1> {{ $book_name }} </h1>
<h3>  by {{ $author_name }} </h3>

<div class="row">
<div class="column left">
<a href="/foreword"> Foreword </a><br>
@for($i =1; $i <= $number_of_chapters; $i++)
<a href="/chapter/{{ $i }}"> Chapter {{ $i }} </a><br>
@endfor
<a href="/all-chapters"> All Chapters </a>
</div>
<hr>
<div class="column right">
<pre>
<p>
@include("chapter" . $chapter_number)
</p>
</pre>
</div>
</div>
</div>
</body>
<style>
.book_container {
    margin-top: 2%;
    width: 50%;
    background: skyblue;
    border-radius: 10px;
    margin-left: auto;
    margin-right: auto;
    padding: 15px;
    height: 460px;
}

h1, h3 {
    font-family: arial;
    text-align: center;
}

a {
    font-family: arial;
    text-decoration: none;
    
}

a:hover {
    color: white;
}

p {
    font-family: arial;
}

.row {
  display: flex;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  height: 300px;
   /* Should be removed. Only for demonstration */
}

.left {
  width: 25%;
}

.right {
  width: 75%;
  overflow-y: scroll;
}

</style>
</html>