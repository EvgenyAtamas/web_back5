<!DOCTYPE html>
<html>
<head>
<title>Задание №5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>

<div class="modal" data-modal="1">
    <?php
    if (!empty($messages)) {
        print('<div id="messages">');
        foreach ($messages as $message) {
            print($message);
        }
        print('</div>');
    }
    ?>
    <body>
	<div class="div">
    <button onclick="document.location='login.php'">Авторизация</button>
    </body>
    <form action="index.php" accept-charset="UTF-8" class="main" method="POST">
    <label><br>Имя (кириллица):<br/>
        <input style="margin-bottom : 1em" id="formname" type="text" name="fio" placeholder="Имя"
            <?php if ($errors['fio']) {print 'class="error"';} ?> value="<?php print $values['fio']; ?>"><label/><br/>
    <label><br>Email:<br/>
        <input style="margin-bottom : 1em;margin-top : 1em" id="formmail" type="email" name="email"
               placeholder="email@mail.ru"
            <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>"><label/><br/>
        <label>Год рождения:<br/>
            <input <?php if ($errors['year']) {print 'class="error"';} ?> value="<?php print $values['year_value']; ?>" id="dr" name="birthyear" value="" type="number" placeholder="Год рождения:"/>
        </label><br/><br/>


       Пол:<br/>
        <label <?php if($errors['sex']){print 'class="error-radio"';}?>>
            <input <?php if($values['sex_value']=="man"){print 'checked';}?> type="radio"
                                                                             name="radio2" value="man"/>
           Мужской</label>
        <label <?php if($errors['sex']){print 'class="error-radio"';}?>> <input <?php if($values['sex_value']=="woman"){print 'checked';}?> type="radio"
                                                                                                                                            name="radio2" value="woman"/>
           Женский</label>
        <br/>
        <br><div <?php if($errors['limb']){print 'class="error-radio-limb"';}?>>
            Количество конечностей:<br/>
            <label><input
                    <?php if($values['limb_value']=="1"){print 'checked';}?>
                        type="radio"
                        name="radio1" value="1"/>
                1</label>
            <label><input
                    <?php if($values['limb_value']=="2"){print 'checked';}?>
                        type="radio"
                        name="radio1" value="2"/>
                2</label>
				<label><input
                    <?php if($values['limb_value']=="3"){print 'checked';}?>
                        type="radio"
                        name="radio1" value="3"/>
                3</label>
				<label><input
                    <?php if($values['limb_value']=="4"){print 'checked';}?>
                        type="radio"
                        name="radio1" value="4"/>
                4</label>
            <br>
        </div>
        <label><br/>
           Сверхспособности:
		               <div <?php if ($errors['abil']) {print 'class="error-abil"';} ?>> 
			<select id="sp" name="superpower[]"multiple="multiple">
            <option value ="0" <?php if(in_array("0", $values['abil_value'])) print "selected";?>>Левитация</option>
            <option value="1" <?php if(in_array("1", $values['abil_value'])) print "selected";?>>Бессмертие</option>
            <option value="2" <?php if(in_array("2", $values['abil_value'])) print "selected";?>>Чтение мыслей</option>
            <option value="3" <?php if(in_array("3", $values['abil_value'])) print "selected";?>>Телекинез</option>
            <option value="4" <?php if(in_array("4", $values['abil_value'])) print "selected";?>>Телепортация</option><br/>//
			</select> </div>
        </label><br/>

        <label <?php if ($errors['bio']) {print 'class="error-bio"';} ?>>
            Биография: <br/>
            <textarea id="biog" name="textarea1" placeholder="Пиши тут"><?php print $values['bio_value'];?></textarea>
        </label><br/>

        <div <?php if ($errors['check']) {print 'class="error-check"';} ?>><label><input <?php if($values['check_value']=="1"){print 'checked';}?> style="margin-bottom : 1em;margin-top : 1em;" id="formcheck" type="checkbox" name="checkbox"
                                                                                                                                                   value="1">Согласие с правилами</label></div>

        <input type="submit" style="margin-bottom : -1em" id="formsend" class="buttonform" value="Отправить">
		</div>
    </form>
</div>
</body>
</html>
