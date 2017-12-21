<!DOCTYPE html>
<html>
    <head>
        <title>Client Information System</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
        <script type="text/javascript" src="<?php echo base_url('assets/js/clientInfo.js'); ?>"></script>
    </head>
    <body>
        <div class="container">
            <legend><h2>Client Information</h2></legend>
            <?php echo form_open('client/client_info', ['onsubmit' => 'return checkField(event);']); ?>
            <table cellpadding="5px">
                <tr>
                    <td>Fullname: </td>
                    <td><?php echo form_input(['name' => 'fullname', 'id' => 'fullname']); ?></td>
                    <td><div id="fname"></div></td>
                    <td><?php echo form_error('fullname'); ?></td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td><?php echo form_radio(['name' => 'gender', 'id' => 'gender', 'value' => 'Male', 'checked' => 'checked']); ?>Male
                        <?php echo form_radio(['name' => 'gender', 'id' => 'gender', 'value' => 'Female']); ?>Female</td>
                </tr>
                <tr>
                    <td>Contact type: </td>
                    <td><select name="contact_type" id="contact" onchange="showField(this.options[this.selectedIndex].value)">
                            <option value="">Select Contact type</option>
                            <option value="Email" id="email">Email ID</option>
                            <option value="Phone" id="phone">Phone No</option>
                        </select></td>
                    <td><div id="contact_mode"></div></td>
                    <td><?php echo form_error('contact'); ?></td>

                </tr>

                <tr>
                    <td>Address: </td>
                    <td><?php echo form_textarea(['name' => 'address', 'id' => 'address']); ?></td>
                    <td><div id="c_address"></div></td>
                    <td><?php echo form_error('address'); ?>
                </tr>
                <tr>
                    <td>Nationality: </td>
                    <td><?php echo form_input(['name' => 'nationality', 'id' => 'nationality']); ?></td>
                    <td><div id="nationality_required"></div></td>
                </tr>
                <td><?php echo form_error('nationality'); ?></td>
                <tr>
                    <td>Date of Birth: </td>
                    <td><input type="date" name="dob" id="dob"></td>
                    <td><div id="date_birth"></div></td>
                </tr>
                <td><?php echo form_error('date'); ?></td>
                <tr>
                    <td>Education Backgroud: </td>
                    <td><?php echo form_input(['name' => 'education', 'id' => 'education']); ?></td>
                    <td><div id="edu_back"></div></td>
                </tr>
                <tr>
                    <td><?php echo form_reset(['name' => 'reset', 'value' => 'Reset']); ?>
                        <?php echo form_submit(['name' => 'submit', 'value' => 'Submit']); ?></td>
                </tr>
            </table>
            <?php echo form_close(); ?>
        </div>
    </body>
</html>
