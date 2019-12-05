<HTML>
<HEAD>
<TITLE>Example 3.3</TITLE>
<SCRIPT LANGUAGE="Javascript">10
var question="What is 10+10 ?";
var answer=20;
var correct='<IMG SRC="correct.gif">';
var incorrect='<IMG SRC="incorect.gif">';
var response=prompt(question,"0");
if (response != answer) {
    if (confirm("Wrong ! press OK fora second change"))
    response=prompt(question,"0");}
    var output = (response ==answer ) ?
    correct:incorrect ;
</SCRIPT>
</HEAD>
<BODY>
<SCRIPT LANGUAGE="Javascript">
<!--document.write(output);-->
</SCRIPT>
</BODY>
</HTML>