<table border="1" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>
            <h2>Matjhabeng Local Municipality Document Management System</h2>
        </td>
    </tr>
    <tr>
        <td><p>Your document has been given final approval</p></td>
    </tr>
    <tr>
        <td style="padding: 20px 0 30px 0;">
            <table>
                <tr>
                    <td>Document id</td>
                    <td><?php echo $details['Document']['id']?></td>
                </tr>
                <tr>
                    <td>Document type</td>
                    <td><?php echo $details['Document']['name']?></td>
                </tr>
                <tr>
                    <td>Document date</td>
                    <td><?php echo $details['Document']['document_date']?></td>
                </tr>
            </table>
            <p><?php echo $details ?></p>
        </td>
    </tr>
    <tr>
        <td style="text-align: center">
            @DTA 2016
        </td>
    </tr>
</table>