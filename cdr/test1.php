
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Form field hints with CSS and JavaScript</title>
    <style type="text/css">


        /* All form elements are within the definition list for this example */
        dl {
            font:normal 12px/15px Arial;
            position: relative;
            width: 350px;
        }
        dt {
            clear: both;
            float:left;
            width: 130px;
            padding: 4px 0 2px 0;
            text-align: left;
        }
        dd {
            float: left;
            width: 200px;
            margin: 0 0 8px 0;
            padding-left: 6px;
        }


        /* The hint to Hide and Show */
        .hint {
            display: none;
            position: absolute;
            right: -200px;
            width: 200px;
            margin-top: -4px;
            border: 1px solid #c93;
            padding: 10px 12px;
            /* to fix IE6, I can't just declare a background-color,
            I must do a bg image, too!  So I'm duplicating the img/pointer.gif
            image, and positioning it so that it doesn't show up
            within the box */
            background: #ffc url(img/pointer.gif) no-repeat -10px 5px;
        }

        /* The pointer image is hadded by using another span */
        .hint .hint-pointer {
            position: absolute;
            left: -10px;
            top: 5px;
            width: 10px;
            height: 19px;
            background: url(img/pointer.gif) left top no-repeat;
        }
    </style>
    <script type="text/javascript">
        function addLoadEvent(func) {
            var oldonload = window.onload;
            if (typeof window.onload != 'function') {
                window.onload = func;
            } else {
                window.onload = function() {
                    oldonload();
                    func();
                }
            }
        }

        function prepareInputsForHints() {
            var inputs = document.getElementsByTagName("input");
            for (var i=0; i<inputs.length; i++){
                // test to see if the hint span exists first
                if (inputs[i].parentNode.getElementsByTagName("span")[0]) {
                    // the span exists!  on focus, show the hint
                    inputs[i].onfocus = function () {
                        this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
                    }
                    // when the cursor moves away from the field, hide the hint
                    inputs[i].onblur = function () {
                        this.parentNode.getElementsByTagName("span")[0].style.display = "none";
                    }
                }
            }
            // repeat the same tests as above for selects
            var selects = document.getElementsByTagName("select");
            for (var k=0; k<selects.length; k++){
                if (selects[k].parentNode.getElementsByTagName("span")[0]) {
                    selects[k].onfocus = function () {
                        this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
                    }
                    selects[k].onblur = function () {
                        this.parentNode.getElementsByTagName("span")[0].style.display = "none";
                    }
                }
            }
        }
        addLoadEvent(prepareInputsForHints);
    </script>
</head>
<body>
<p style="font:normal 12px/15px Arial;">Tab or click through the fields to reveal the hints.</p>

<dl>
        <dt>
        <label for="firstname">First Name:</label>
        </dt>
    <dd>
        <input       name="firstname"            id="firstname"            type="text" />
        <span class="hint">This is the name your mama called you when you were little.<span class="hint-pointer">&nbsp;</span></span>
    </dd>
    <dt>
        <label for="lastname">Last Name:</label>
    </dt>
    <dd>
        <input
            name="lastname"
            id="lastname"
            type="text" />
        <span class="hint">This is the name your sergeant called you when you went through bootcamp.<span class="hint-pointer">&nbsp;</span></span>
    </dd>
    <dt>
        <label for="email">Email:</label>
    </dt>
    <dd>
        <input
            name="email"
            id="email"
            type="text" />
        <span class="hint">The thing with the @ symbol and the dot com at the end.<span class="hint-pointer">&nbsp;</span></span>
    </dd>
    <dt><label for="year">Birth Year:</label></dt>
    <dd>
        <select id="year" name="year">
            <option value="">YYYY</option>
            <option value="1066">1066</option>
            <option value="1492">1492</option>
            <option value="1776">1776</option>
            <option value="1812">1812</option>
            <option value="1917">1917</option>
            <option value="1942">1942</option>
            <option value="1999">1999</option>
        </select>
        <span class="hint">Pick a famous year to be born in.<span class="hint-pointer">&nbsp;</span></span>
    </dd>
    <dt>
        <label for="username">Username:</label>
    </dt>
    <dd>
        <input
            name="username"
            id="username"
            type="text" />
        <span class="hint">Between 4-12 characters.<span class="hint-pointer">&nbsp;</span></span>
    </dd>
    <dt>
        <label for="password">Password:</label>
    </dt>
    <dd>
        <input
            name="password"
            id="password"
            type="password" />
        <span class="hint">Between 5-13 characters, but not 7.  Never 7.<span class="hint-pointer">&nbsp;</span></span>
    </dd>
    <dt class="button">&nbsp;</dt>
    <dd class="button">
        <input
            type="submit"
            class="button"
            value="Submit" />
    </dd>
</dl>


</body>
</html>

<!--<script type="text/javascript">-->
<!---->
<!--    (function () {-->
<!--        var timeLeft = 30,-->
<!--            cinterval;-->
<!---->
<!--        var timeDec = function (){-->
<!--            timeLeft--;-->
<!--            document.getElementById('countdown').innerHTML = timeLeft;-->
<!--            if(timeLeft === 0){-->
<!--                clearInterval(cinterval);-->
<!--            }-->
<!--        };-->
<!---->
<!--        cinterval = setInterval(timeDec, 1000);-->
<!--    })();-->
<!---->
<!--</script>-->
<!---->
<!--Redirecting in <span id="countdown">30</span>.-->
<?php //$logo = "http://vodafone.com.gh/templates/vodtpl/images/logo2.png";
//$dbfullname = "Emmanuel Gamor";
//
//include_once 'mail.php';
//$from_email = 'emmanuel.gamor@vodafone.com'; //sender email
//$recipient_email = 'gamoremmauel94@gmail.com'; //recipient email
//$subject = "Call Data Record Request"; //subject of email
//$message = "This is a test message"; //message body
//mailer($from_email,$recipient_email,$subject,$message);


?>
