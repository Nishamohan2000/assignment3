/*
Generate a simple PHP program to illustrate the working of the following
operations.
a. Writing to a File
b. Locking Files
*/
/*a*/
&lt;?php
$file = fopen(&quot;test.txt&quot;,&quot;w&quot;);
echo fwrite($file,&quot;Welcome to PHP&quot;);
fclose($file);
?&gt;
/*b*/
&lt;?php
$file = fopen(&quot;test.txt&quot;,&quot;w+&quot;);
// exclusive lock
if (flock($file,LOCK_EX)) {
fwrite($file,&quot;Welcome to PHP&quot;);
// release lock
flock($file,LOCK_UN);
} else {
echo &quot;Error locking file!&quot;;
}
fclose($file);
?&gt;
