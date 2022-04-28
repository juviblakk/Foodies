<?php 
$title = 'Contact Us';
require_once 'includes/header.php';
?>

<div class="columns" style="margin-top:40px;">
	<div class="column is-11 is-offset-1">
		<div>
        <h2 style="text-align:left" class="heading"> Questionnaire </h2>
		</div>
	</div>
</div>
<form action="mail.php" method="post">
    <div class="container">
        <div class="columns">
            <div class="column is-two-thirds">
                <div class="field">
                    <div class="label is-normal">
                        <label class="label">State your Name:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                                <input type="text" class="input is-medium" name="name" />
                            </p>
                        </div>
                    </div>
                </div>
               <div class="field">
                    <div class="label">
                        <label class="label">Are you studying I.T?</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <label><input class="radio is-medium" type="radio" value="" name="answer" value="1"/> Yes</label>
                            <label><input class="radio is-mediu m" type="radio" value="" name="answer" value=""/> No</label>
                        </p>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label class="label">What was your first impression when you entered the website? </label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                                <input type="text" class="input is-medium" name="name" />
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label class="label">Is the layout of the website fluid? ?</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <label><input class="radio is-medium" type="radio" value="" name="answer" value="1"/> Yes</label>
                            <label><input class="radio is-mediu m" type="radio" value="" name="answer" value=""/> No</label>
                        </p>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label class="label">Is the appearance appeasing enough to keep you engaged?</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <label><input class="radio is-medium" type="radio" value="" name="answer" value="1"/> Yes</label>
                            <label><input class="radio is-mediu m" type="radio" value="" name="answer" value=""/> No</label>
                        </p>
                        </p>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <div class="label">
                        <label class="label">Is the appearance in accordance with the content? </label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <label><input class="radio is-medium" type="radio" value="" name="answer" value="1"/> Yes</label>
                            <label><input class="radio is-mediu m" type="radio" value="" name="answer" value=""/> No</label>
                        </p>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label class="label">Were you able to navigate to other pages easily? </label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <label><input class="radio is-medium" type="radio" value="" name="answer" value="1"/> Yes</label>
                            <label><input class="radio is-mediu m" type="radio" value="" name="answer" value=""/> No</label>
                            <label class="label">If No please describe the challenges you experienced </label>
                            <input type="text" class="input is-medium" name="name" />
                        </p>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label class="label">On a scale of 1-5 how do you rate the conciseness of the content? </label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <label><input class="radio is-medium" type="radio" value="" name="answer" value="1"/> 1</label>
                            <label><input class="radio is-mediu m" type="radio" value="" name="answer" value="1"/>2</label>
                            <label><input class="radio is-medium" type="radio" value="" name="answer" value="1"/> 3</label>
                            <label><input class="radio is-mediu m" type="radio" value="" name="answer" value="1"/>4</label>
                            <label><input class="radio is-medium" type="radio" value="" name="answer" value="1"/> 5</label>
                       </p>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label class="label">WDid the content render well in your? </label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <label><input class="radio is-medium" type="radio" value="" name="answer" value="1"/> Yes</label>
                            <label><input class="radio is-mediu m" type="radio" value="" name="answer" value=""/> No</label>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label class="label">Was the content helpful? </label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <label><input class="radio is-medium" type="radio" value="" name="answer" value="1"/> Yes</label>
                            <label><input class="radio is-medium" type="radio" value="" name="answer" value=""/> No</label>
                        </p>
                        </div>
                    </div>
                </div>
           <div class="column is-one-third"></div>
        </div>
    </div>
</form>

</body>


<?php require_once 'includes/footer.php'; ?>
