<?php include "header.php"; ?>
<?php include "function.php"; ?>
<?php include "table.php"; ?>

<div id="invoice_infos">

<section>

	<h1>MON ENTREPRISE</h1>
	<p>3 avenue de la république</p>
	<p>75012 Paris</p>
</section>

<section>
	<p>Facture n°: <?php random_invoice_nb(); ?></p>
	<p>Date : <?php randomDate(); ?></p>
</section>

<section>
	<p>Entreprise cliente</p>
	<p>5 avenue de la république</p>
	<p>75012 Paris</p>
</section>

</div>


<div id="table">


<table>





    
	<!-- FIRST CATEGORY -->
	<thead>
        <tr>
            <th>Référence</th>
            <th>Désignation</th>
            <th>Prix Unitaire (Hors Taxe)</th>
            <th>Quantité</th>
            <th>Prix total = PU * Q</th>
            <th>Total TTC (Prix * 20%)</th>
        </tr>
		
    </thead>
	
    <tbody>
        <tr>
            <td><?php random_ref(); ?></td>
			<td><?php echo $items[0]['designation']; ?></td>
			<td><?php random_price(); ?></td>
			<td><?php random_quantity(); ?></td>
			<td></td>
			<td></td>
        </tr>
	</tbody>
	
	<tbody>
        <tr>
            <td><?php random_ref(); ?></td>
			<td><?php echo $items[1]['designation']; ?></td>
			<td><?php random_price(); ?></td>
			<td><?php random_quantity(); ?></td>
			<td></td>
			<td></td>
        </tr>
	</tbody>
	
	<tbody>
        <tr>
            <td><?php random_ref(); ?></td>
			<td><?php echo $items[2]['designation']; ?></td>
			<td><?php random_price(); ?></td>
			<td><?php random_quantity(); ?></td>
			<td></td>
			<td></td>
        </tr>
	</tbody>
	
	<tbody>
        <tr>
            <td><?php random_ref(); ?></td>
			<td><?php echo $items[3]['designation']; ?></td>
			<td><?php random_price(); ?></td>
			<td><?php random_quantity(); ?></td>
			<td></td>
			<td></td>
        </tr>
	</tbody>
	
	<tbody>
        <tr>
            <td><?php random_ref(); ?></td>
			<td><?php echo $items[4]['designation']; ?></td>
			<td><?php random_price(); ?></td>
			<td><?php random_quantity(); ?></td>
			<td></td>
			<td></td>
        </tr>
	</tbody>
	
	<tbody>
        <tr>
            <td><?php random_ref(); ?></td>
			<td><?php echo $items[5]['designation']; ?></td>
			<td><?php random_price(); ?></td>
			<td><?php random_quantity(); ?></td>
			<td></td>
			<td></td>
        </tr>
	</tbody>
	
	<tbody>
        <tr>
            <td><?php random_ref(); ?></td>
			<td><?php echo $items[6]['designation']; ?></td>
			<td><?php random_price(); ?></td>
			<td><?php random_quantity(); ?></td>
			<td></td>
			<td></td>
        </tr>
	</tbody>
	
	<tbody>
        <tr>
            <td><?php random_ref(); ?></td>
			<td><?php echo $items[7]['designation']; ?></td>
			<td><?php random_price(); ?></td>
			<td><?php random_quantity(); ?></td>
			<td></td>
			<td></td>
        </tr>
	</tbody>
	
	<tbody>
        <tr>
            <td><?php random_ref(); ?></td>
			<td><?php echo $items[8]['designation']; ?></td>
			<td><?php random_price(); ?></td>
			<td><?php random_quantity(); ?></td>
			<td></td>
			<td></td>
        </tr>
	</tbody>
	
	<tbody>
        <tr>
            <td><?php random_ref(); ?></td>
			<td><?php echo $items[9]['designation']; ?></td>
			<td><?php random_price(); ?></td>
			<td><?php random_quantity(); ?></td>
			<td></td>
			<td></td>
        </tr>
	</tbody>
	
	<tbody>
        <tr>
            <td><?php random_ref(); ?></td>
			<td><?php echo $items[10]['designation']; ?></td>
			<td><?php random_price(); ?></td>
			<td><?php random_quantity(); ?></td>
			<td></td>
			<td></td>
        </tr>
	</tbody>


</table>



</div>

<div id="table2">

	<table>
	
	
	<thead>
        <tr>
            <th colspan="2">Total HT</th>
        </tr>
		
    </thead>
	
    <tbody>
        <tr>
            <td>326€</td>
        </tr>
	</tbody>
	
	</table>
	
	<table>
	
	
	<thead>
        <tr>
            <th colspan="2">TVA 20%</th>
        </tr>
		
    </thead>
	
    <tbody>
        <tr>
            <td>65,2 €</td>
        </tr>
	</tbody>
	
	</table>
	
	<table>
	
	
	<thead>
        <tr>
            <th colspan="2">Total</th>
        </tr>
		
    </thead>
	
    <tbody>
        <tr>
            <td>391,2 €</td>
        </tr>
	</tbody>
	
	</table>

</div>



<?php include "footer.php"; ?>