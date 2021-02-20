<hr>
<br>
<?= form_open('rp')?>
    <input type="email" name="email" placeholder="enter your email" required  maxlength="128"> <br>
    <?= form_error('email', '<span>', '</span>') ?> <br>
    <input type="submit">
<?= form_close()?>
<br>
<br>
<?php 
    $email_not_found = $this->session->flashdata('email_not_found') ? $email_not_found : '';
    echo '<br';
    $email_sent = $this->session->flashdata('email_sent') ? $email_sent : '';
    echo '<br';
    $token_expired = $this->session->flashdata('token_expired') ? $token_expired : '';