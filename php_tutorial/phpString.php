<?php $page='8'; include '../header.php'; ?>

<div class="w3-container w3-col ">
<div id="leftSideMenu" class="w3-quarter ">
<?php include 'phpMenu.php' ?>
</div>

<div class="w3-half contant" style="border:.1px solid white ;" id="font">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="7954664539"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


		<div >
			<h1>PHP Strings </h1>
 				 <a href="phpFloatingPoints.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpArray.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            <p>A String is a series of character. This means that PHP only support 256-character set, and hence do not offer Unicode support. <br><br>Actually, there is no restration regarding the length of string on 64-bit system On 32- bit system and the string can be as large up 2GB.</p>
            <h3>Syntax</h3>
            <p>As the string is the most imporatant part of any programming language, PHP also gives more preference to string, hence the string literals can be specified in four different ways:</p>
            <ul>
                <li>Simgle Quoted</li>
                <li>Double Quoted</li>
                <li>Heredoc Syntax</li>
                <li>Nowdoc Syntax(included after PHP 5.2<sup>nd</sup> version.)</li>
            </ul>
            <h2>Single Quoted</h2>
            <p>Simple way to specify the string is to enclosed it in single quotes(' ').<br><br>To specify a literal single quote, escape it with a backslash(\). To specify a literal backslash, double it (\\). This means that the other  escape sequences you must be used to such as \r or \n, will have special meaning.</p>
            
    <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px"><strong>NOTE</strong>:Unlike the double-quote and heredoc syntaxes, variables and escape sequences for special character will not be expanded when occur in single quoted string.</p>
      </div>
      
      
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SquireBox -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="4162882890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


            <p>Let's see an examples of single quote:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            
            echo 'this is a simple string';<br><br>

            echo 'You can also have embedded newlines in <br>
            strings this way as it is<br>
            okay to do';<br><br>

            // Outputs: Arnold once said: "I'll be back"<br>
            echo 'Arnold once said: "I\'ll be back"';<br><br>

            // Outputs: You deleted C:\*.*?<br>
            echo 'You deleted C:\\*.*?';<br><br>

            // Outputs: You deleted C:\*.*?<br>
            echo 'You deleted C:\*.*?';<br><br>

            // Outputs: This will not expand: \n a newline<br>
            echo 'This will not expand: \n a newline';<br><br>

            // Outputs: Variables do not $expand $either<br>
            echo 'Variables do not $expand $either';<br><br>
            

            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:225px;" class="w3-border">
            
            <?php

            echo 'this is a simple string<br/>';

            echo 'You can also have embedded newlines in<br/> 
            strings this way as it is<br/>
            okay to do<br/>';

            // Outputs: Arnold once said: "I'll be back"
            echo 'Arnold once said: "I\'ll be back"<br/>';

            // Outputs: You deleted C:\*.*?
            echo 'You deleted C:\\*.*?<br/>';

            // Outputs: You deleted C:\*.*?
            echo 'You deleted C:\*.*?<br/>';

            // Outputs: This will not expand: \n a newline
            echo 'This will not expand: \n a newline<br/>';

            // Outputs: Variables do not $expand $either
            echo 'Variables do not $expand $either<br/>';

            ?>
            </div>
 
            <h2>Double Quoted</h2>
            <p>If the string is enclosed in double quotes(" "),PHP will interpret the following escape sequences for special charaters:</p>
            <table id="tab">
                <tr id="head" >
                     <th width="100px">Sequence</th>
                     <th>Escape character Meaning</th>
                 </tr>
                <tr>
                    <td>\n</td>
                    <td>line feed</td>
                </tr>
                <tr>
                    <td>\r</td>
                    <td>carriage return</td>
                </tr>
                <tr>
                    <td>\t</td>
                    <td>horizontal tab</td>
                </tr>
                <tr>
                    <td>\v</td>
                    <td>vertical tab</td>
                </tr>
                <tr>
                    <td>\e</td>
                    <td>used to escape(ESC)</td>
                </tr>
                <tr>
                    <td>\f</td>
                    <td>form feed</td>
                </tr>
                <tr>
                    <td>\\</td>
                    <td>backslash</td>
                </tr>
                <tr>
                    <td>\$</td>
                    <td>dollar sign</td>
                </tr>
                <tr>
                    <td>\"</td>
                    <td>double quote</td>
                </tr>
            </table>
            <p>The most imporatant feature of doubled-quoted strings is the fact that variable name will be expanded.</p>
            <h2>Heredoc</h2>
            <p>The Third way to express string is the heredoc syntax: <code>&lt;&lt;&lt;</code>. After this operator, identifier is provided, then a you can star string with newline.<br><br>The same identifier is equired to close the quotation.</p>
            <h3>Rules of Naming Identifiers</h3>
            <p>The closing identifier must being in the first colum of line. it must be contain only <u>alphanumeric charecters</u> and <u>undersores</u>, and must start with a <u>non-digit</u> character or <u>underscore</u><br><br>Let's see example:</p>
       <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            
            &nbsp;echo &lt;&lt;&lt;EOT&nbsp;//this is opening of identifier<br><br>
            &nbsp;Here EOT is an identifier<br>
            &nbsp;of heredoc string <br>
            &nbsp;This whole content written in between EOT identifier of string.<br><br>
            &nbsp;EOT;&nbsp;//this is closing of identifier<br><br>
            

            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">            
            <?php
echo <<<EOT
 Here EOT is an identifier
 of heredoc string. 
 This whole content written in between EOT identifier of string.
EOT;

            ?>
            </div>
            <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px"><strong>Warning</strong>:It is very important to notice that the <i>line with the closing identifier</i> must contains no other characters, except semicolon(;). That means especially that the identifier <i>may not be intended</i>, and there may not any space or tab before or after the semicolon.</p>
      </div>
            <p>If this rule boroken and the closing identifier is not "clean", it will not consider closing identifier. and will show you a parse error.</p>
            
            <h3>Invalid Syntax</h3>
            <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            
            &nbsp;echo &lt;&lt;&lt;EOT<br><br>
            &nbsp;Here EOT is an identifier<br>
            &nbsp;of heredoc string <br>
            &nbsp;This whole content written in between EOT identifier of string.<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;EOT;&nbsp;//do not make space and tab before and after identifier<br><br>   

            ?&gt;
        </div>        
    </div>
            <p>This will you a warning:</p>
            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">            
<p>Parse error: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or heredoc end (T_END_HEREDOC) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) in <strong>C:\xampp\htdocs\php_tutorial\phpString.php on line 221</strong></p>
            </div>
            <p>Heredoc text behaves just like a double-quoted string, without the double quote.<br><br>Let's see an example:</p>
               <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            
            &nbsp;$str = &lt;&lt;&lt;EOD<br>
              &nbsp;  Example of string<br>
              &nbsp;  spanning multiple lines<br>
              &nbsp;  using heredoc syntax.<br>
              &nbsp;  EOD;<br><br>

              &nbsp;  /* More complex example, with variables. */<br>
              &nbsp;  class foo<br>
              &nbsp;  {<br>
              &nbsp;      var $foo;<br>
              &nbsp;      var $bar;<br><br>

               &nbsp;     function __construct()<br>
               &nbsp;     {<br>
              &nbsp;          $this->foo = 'Foo';<br>
               &nbsp;         $this->bar = array('Bar1', 'Bar2', 'Bar3');<br>
              &nbsp;      }<br>
              &nbsp;  }<br><br>

              &nbsp;  $foo = new foo();<br>
              &nbsp;  $name = 'MyName';<br><br>

               &nbsp; echo &lt;&lt;&lt;EOT<br>
               &nbsp; My name is "$name". I am printing some $foo->foo.<br>
               &nbsp; Now, I am printing some {$foo->bar[1]}.<br>
               &nbsp; This should print a capital 'A': \x41<br>
               &nbsp; EOT;   <br><br>

            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">            
    <?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

/* More complex example, with variables. */
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;
?>  
                
            </div>
            <h2>Nowdoc</h2>
            <P>Nowdoc is just similer to Heredoc but the little bit difference with  Heredoc is it can be used as both single and double quoted but Nowdoc can be used single quoted only. Otherwise both have same syntax.<br><br>Let's see this example:</P>
      <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            
        $str = &lt;&lt;&lt;'EOD'<br><br>
Example of string<br>
spanning multiple lines<br>
using nowdoc syntax.<br>
EOD;<br>
     echo $str;&nbsp; //printing the string<br><br>

            ?&gt;
        </div>        
    </div>
             <div style="width:100%;height:100px;" class="w3-border"> 
                 <?php
               $str = <<<'EOD'

Example of string<br/>
spanning multiple lines<br/>
using nowdoc syntax.
EOD;
echo $str;  //printing the string
                 ?>
                 
            </div>
            <h3>Variable Parsing</h3>
            <p>PHP string facilitate to parse any variable inside/outside the string. <br><br><strong>Remember That:</strong> In which string you wish to parse variable must be in <u>double quote</u> or within <u>heredoc</u>.<br><br>There are two methods to parse a variable as followed: Simple method and Complex Method.<br><br>Simple method is most common and convenient. It provides a way to ambed a variable, an array value or object property in a string with a minimum of effort where as Complex method is recognized by the curly braces surrounding the expression.<br><br>Let's see with example:</p>
            <h3>Simple syntax</h3>
     <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            
            $juice = "apple";<br><br>

            echo "He drank some $juice juice.".PHP_EOL;<br>
            // Invalid. "s" is a valid character for a variable name, but the variable is $juice.<br>
            echo "He drank some juice made of $juice.";<br>
            // Valid. Explicitly specify the end of the variable name by enclosing it in braces:<br>
            echo "He drank some juice made of ${juice}s.";<br><br>

            ?&gt;
        </div>        
    </div>
            <div style="width:100%;height:100px;" class="w3-border"> 
                 <?php            

                $juice = "apple";

                echo "He drank some $juice juice.<br>".PHP_EOL;
                // Invalid. "s" is a valid character for a variable name, but the variable is $juice.
                echo "He drank some juice made of $juice.<br>";
                // Valid. Explicitly specify the end of the variable name by enclosing it in braces:
                echo "He drank some juice made of ${juice}s.";
                 ?>
                 
            </div>
            <h2>Useful functions</h2>
            <p>Some functions are used in PHP for string Operation are listed above:</p>
            <ul>
                <li>String Function Section.</li>
                <li>POSIX Regex Functions(For regular expressions).</li>
                <li>PCRE Functions(Perl-Compatible regular expressions).</li>
                <li>String URL Functions.</li>
                <li>String Encryption and Decryption(using ncrypt and mhash).</li>
                <li>Character Type Functions.</li>
            </ul>
            <p>The dot (.) operator is used to concatinate two strings.</p>
   <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            
           
             &nbsp;$a = "Hello ";<br>
               &nbsp; $b = $a . "World!";&nbsp; // now $b contains "Hello World!"<br><br>

               &nbsp;echo $b;<br><br>

            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">            
    <?php
 $a = "Hello ";
  $b = $a . "World!";  // now $b contains "Hello World!"

 echo $b;
?>  
                
            </div>
            
             
   

            

				    <a href="phpFloatingPoints.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpArray.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
  					<div class="w3-hide-small w3-hide-medium">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- FooterBanner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:650px;height:200px"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="4521975542"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>


<!--CONTANT AREA ENDS-->
			</div>			
	</div>	
		<div class="w3-quarter" style="border: 1px solid white;"  >		
			<?php include '../rightSideBar.php' ?>
	</div>
	
		
	


		

	




<footer style="border: 1px solid white;float: left; width: 100%" ><?php include '../footer.php' ?></footer>


