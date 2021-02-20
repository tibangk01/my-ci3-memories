<hr>
<br>
<?= form_open('up')?>
    <input type="email" name="email" placeholder="enter your email" required  maxlength="128">
    <?= form_error('email', '<span>', '</span>') ?> <br>
    <input type="password" name="password" placeholder="enter your password" required  maxlength="64">
    <?= form_error('password', '<span>', '</span>') ?> <br>
    <input type="cpassword" name="cpassword" placeholder="enter your cpassword" required  maxlength="64"> <br>
    <?= form_error('cpassword', '<span>', '</span>') ?> <br>
    <input type="submit">
<?= form_close()?>
<br>
<br>
<?php 
    $pass_recovery_success = $this->session->flashdata('pass_recovery_success') ? $pass_recovery_success : '';