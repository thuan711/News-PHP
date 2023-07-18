<h1>Tin mới nhất</h1>
@php 
foreach($data as $tin) {
    echo "<p>{$tin->tieuDe} </p>";
    echo "<p>{$tin->tomTat} </p>";
    echo "<hr />";
}
@endphp