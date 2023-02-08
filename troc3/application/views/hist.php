<div>
    <h4> Historique d'echange </h4>
    <table class="table table-striped">
        <tr>
            <th> Date acceptation</th>
            <th> Objet </th>
            <th> Proprietaire </th>
        </tr>

        <?php for($i=0;$i<count($hist);$i++) {?>
            <tr>
                <td> <?php echo $hist[$i]['daty'];?> </td>
                <td> <?php echo $hist[$i]['nomobjet2'];?> </td>
                <td> <?php echo $hist[$i]['nom1'];?> </td>
            </tr>
            <tr>
                <td> <?php echo $hist[$i]['daty'];?> </td>
                <td> <?php echo $hist[$i]['nomobjet1'];?> </td>
                <td> <?php echo $hist[$i]['nom2'];?> </td>
            </tr>
        <?php }?>
    </table>
</div>