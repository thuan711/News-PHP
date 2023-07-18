<!-- <h1>Tin mới nhất</h1>
@php 
foreach($data as $tin) {
    echo "<p>{$tin->tieuDe} </p>";
    echo "<p>{$tin->ngayDang} </p>";
    echo "<hr />";
}
@endphp -->
<!-- <h1>Tin mới nhất</h1>
@php 
foreach($data as $tin) {
    echo "<p>{$tin->tieuDe} </p>";
    echo "<p>{$tin->tomTat} </p>";
    echo "<hr />";
}
@endphp -->
<h1>Tin mới nhất</h1>

    echo "<h2>{$tin->tieuDe} </h2>";
    echo "<h5>{$tin->tomTat} </h5>";
    echo "<p>{$tin->noiDung} </p>;
    echo "<hr />";


