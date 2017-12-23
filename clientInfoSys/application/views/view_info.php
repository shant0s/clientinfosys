<?php include_once 'header.php'; ?>
<div class="container">
    <legend><h2>Client Information</h2></legend>
    <div class="table">
        <table border="1" cellpadding="5px">
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Contact Type</th>
                <th>Phone/Email</th>
                <th>Address</th>
                <th>Nationality</th>
                <th>Date of Birth</th>
                <th>Education</th>
            </tr>
            <?php foreach ($clientData as $item): ?>
                <?php foreach ($item as $value): ?>

                    <tr>
                        <td><?php echo $value['Name']; ?></td>
                        <td><?php echo $value['Gender']; ?></td>
                        <td><?php echo $value['Contact_type']; ?></td>
                        <td><?php echo $value['Phone/Email']; ?></td>
                        <td><?php echo $value['Address']; ?></td>
                        <td><?php echo $value['Nationality']; ?></td>
                        <td><?php echo $value['DOB']; ?></td>
                        <td><?php echo $value['Education']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<?php include_once 'footer.php'; ?>