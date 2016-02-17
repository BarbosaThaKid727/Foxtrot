    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Cargo</title>
    <link rel="stylesheet" type="text/css" href="view.css" media="all">
    <script type="text/javascript" src="view.js"></script>

    </head>
    <body id="main_body" >

        <img id="top" src="top.png" alt="">
        <div id="form_container">

            <h1><a>Cargo</a></h1>
            <form id="form_1096586" class="appnitro"  method="post" action="job_posts.php">
                        <div class="form_description">
                <h2>Cargo</h2>
                <p>The necessary cargo/package details must be listed.</p>
            </div>						
                <ul >

                        <li id="li_1" >
            <label class="description" for="element_1">Name of package </label>
            <div>
                <input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
            </div> 
            </li>
                    <li id="li_6" >
            <label class="description" for="element_6">Package Type </label>
            <span>
                <select id="element_6_1" name="element_6" class="element radio" type="radio" value="1" />
                <option selected="selected" for="element6_1">Select the type of package...</option>
                <option class="option" for="element6_1" >Fragile</option>
                <option class="option" for="element6_1" >Foodstuff</option>
                <option class="option" for="element6_1" >Furniture</option>
                <option class="option" for="element6_1" >Farming</option>
                <option class="option" for="element6_1" >Mechenical</option>
                <option class="option" for="element6_1" >Medicinal</option>
            </select>
    <!--
    <label class="choice" for="element_6_1">Fragile</label>
    <input id="element_6_2" name="element_6" class="element radio" type="radio" value="2" />
    <label class="choice" for="element_6_2">Foodstuff</label>
    -->

            </span> 
            </li>
                    <li id="li_2" >
            <label class="description" for="element_2">Weight </label>
            <div>
                <input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
            </div> 
            </li>		<li id="li_3" >
            <label class="description" for="element_3">Dimesions </label>
            <div>
                <input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value=""/> 
            </div> 
            </li>		<li id="li_6" >
            <label class="description" for="element_6">Is the package insured? </label>
            <span>
                <input id="element_6_1" name="element_6" class="element radio" type="radio" value="1" />
    <label class="choice" for="element_6_1">Yes</label>
    <input id="element_6_2" name="element_6" class="element radio" type="radio" value="2" />
    <label class="choice" for="element_6_2">No</label>

            </span> 
            </li>		<li id="li_4" >
            <label class="description" for="element_4">Time </label>
            <span>
                <input id="element_4_1" name="element_4_1" class="element text " size="2" type="text" maxlength="2" value=""/> : 
                <label>HH</label>
            </span>
            <span>
                <input id="element_4_2" name="element_4_2" class="element text " size="2" type="text" maxlength="2" value=""/> 
                <label>MM</label>
            </span>
            <span>
                <select class="element select" style="width:4em" id="element_4_4" name="element_4_4">
                    <option value="AM" >AM</option>
                    <option value="PM" >PM</option>
                </select>
                <label>AM/PM</label>
            </span> 
            </li>		<li id="li_5" >
            <label class="description" for="element_5">Pickup Location </label>
            <div>
                <input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value=""/> 
            </div> 
            </li>
                    <li id="li_5" >
            <label class="description" for="element_5">Delivery Location </label>
            <div>
                <input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value=""/> 
            </div> 
            </li>
<!--                <a href="Goods.php">CONTINUE</a>-->
            <input name="register" value="Register" size="6" type="submit" />
            </li>
                </ul>
            </form>
        </div>

        </body>
    </html>