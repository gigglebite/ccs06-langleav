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
Greetings! This is Aleeya speaking. ૮ ˶ᵔ ᵕ ᵔ˶ ა <br>
This project is a sample exercise that I made 
for my subject in Applications Development.
None of this content belongs to me, 
and all the rights goes to Lang Leav. 
This is a simple preview of her book, "Sea of Strangers." 
And in case why you're wondering why there are only a 
few chapters added to this sort of archive. 
Again, this isn't my property.

Nevertheless, I hope it'll serve you well.
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