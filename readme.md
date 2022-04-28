# X3Dom APP WEB

[commit log](log.md) doc too view commit snapshot.

3d archive in [3d](3d) directory

## github repositories

[https://github.com/KYCCCCC/AppX3Dom](https://github.com/KYCCCCC/AppX3Dom)


```
 git config --global user.name "KYCCCCC"
 git config --global user.email "1659104012@qq.com"
```

```
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/KYCCCCC/AppX3Dom.git
git push -u origin main
```

```
git remote add origin git@github.com:KYCCCCC/AppX3Dom.git
git branch -M main
git push -u origin main
```

## boostrap 4.6

https://v4.bootcss.com/
## 3D MODEL
Blender
## X3DOOM
https://x3dom.org/download/1.3/docs/singlehtml/

how to use X3DOOM
```
    <!-- Place the X3D code here -->
    <div class="model3D">
        <x3d id="wire">
        <scene>
            <Switch whichChoice="0" id='SceneSwitch'>
                <transform>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/coke.x3d" > </inline>
                </transform>
                <transform>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/sprite.x3d"> </inline>
                </transform>
                <transform>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/pepper_animation.x3d"> </inline>
                </transform>
            </Switch>
        </scene>
        </x3d>
    </div> 
```
## PHP SEVER MVC
https://www.php.net/
## SQLite db
https://www.runoob.com/sqlite/sqlite-php.html
https://www.php.net/manual/zh/class.sqlite3.php
http://code.tutsplus.com/tutorials/why-you-should-be-using-phps-pdo-for-database-access--net-12059 
http://culttt.com/2012/09/24/prevent-php-sql-injection-with-pdo-prepared-statements/
## JQUERY AJAX JSON
http://t.mb5u.com/jquery/

## EXTRA FUNCTION
use about page
- change data 
```
title <input type="text" name="title[]" value = "<?php echo $data[$i]["title"] ?> "><br>
subTitle <input type="text" name="subTitle[]" value = " <?php echo $data[$i]["subTitle"] ?> "><br>
description <textarea type="text" name="description[]" value = "  "><?php echo $data[$i]["description"] ?></textarea>
```
## referance

http://users.sussex.ac.uk/~martinwh/3dapp/labs/
http://users.sussex.ac.uk/~martinwh/3dapp/lab9/CocaCola_VM/index.php/apicocacola#

