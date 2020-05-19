<html>
<head>
</head>
<body>
</body>


    <div style="width:100%;text-align:justified">
        <div class="c-3 c-t-3 adminform-t">
            <p class="adminsub ">Title</p>
        </div>
        <div class="c-8 c-t-8 adminform-t">
            <input class="admininput c-8 c-t-8" type="text" name="title" placeholder="Title" value="<?php echo (isset($_POST["title"]))?$_POST["title"]:'';?>"/>
        </div>
            <p id="titleerr" class="colred" style="margin:0%" hidden>invalid title</p>
    </div>
    <div style="width:100%;text-align:justified">
        <div class="c-3 c-t-3 adminform-t">
            <p class="adminsub ">Ratings</p>
        </div>
        <div class="c-8 c-t-8 adminform-t">
            <input class="admininput c-8 c-t-8" type="number" min="0" name="rating" placeholder="Rating" max="10" step="0.1" value="<?php echo (isset($_POST["rating"]))?$_POST["rating"]:'';?>"/>
        </div>
            <p id="ratingerr" class="colred" style="margin:0%" hidden>invalid rating</p>
    </div>
    <div style="width:100%;text-align:justified">
        <div class="c-3 c-t-3 adminform-t">
            <p class="adminsub ">Seasons</p>
        </div>
        <div class="c-8 c-t-8 adminform-t">
            <input class="admininput c-8 c-t-8" type="number" min="0" name="season" placeholder="Seasons" value="<?php echo (isset($_POST["season"]))?$_POST["season"]:'';?>"/>
        </div>
            <p id="seasonerr" class="colred" style="margin:0%" hidden>invalid season number</p>
    </div>
    <div style="width:100%;text-align:justified">
        <div class="c-3 c-t-3 adminform-t">
            <p class="adminsub ">Image_Url</p>
        </div>
        <div class="c-8 c-t-8 adminform-t">
            <input class="admininput c-8 c-t-8" type="url" name="url" placeholder="Image URL" value="<?php echo (isset($_POST["url"]))?$_POST["url"]:'';?>"/>
        </div>
            <p id="urlerr" class="colred" style="margin:0%" hidden>invalid image url</p>
    </div>
</div>
<div class="" style="text-align:center">
    <button type='submit' name='submit' class="c-3 c-m-3 submitbutton-t">Submit</button>
</div>