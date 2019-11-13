<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

<div class="container mx-auto mb-10">
	<div class="flex wrapper">
		<div class="sidebar hidden md:block w-1/3 bg-white shadow-lg mr-0 md:mr-3 py-6 px-6">
			<?php get_template_part('blocks/sidebar') ?>
		</div>
		<div class="main w-full md:w-2/3 bg-white shadow-lg ml-0 md:ml-3 py-6 px-6">
			<div class="table-responsive mb-5">
			 	<table>
			 		<thead class="thead">
			 			<tr>
		          <th colspan="2">Відомості про підприємство</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<tr>
		      		<td class="label">ЄДРПОУ:	</td>
		      		<td class="value"><?php echo carbon_get_theme_option( 'crb_edrpoy' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">Назва компанії:</td>
		      		<td class="value"><?php echo carbon_get_theme_option( 'crb_namesite' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">Скорочена назва компанії:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_smallname' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">ПІБ керівника:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_pib' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">Головний бухгалтер:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_buh' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">Місто:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_city' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">Поштовий індекс:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_index' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">Місцезнаходження:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_place' ); ?></td>
		      	</tr>
		      </tbody>
		    </table>
		  </div>
		  <div class="table-responsive mb-5">
			 	<table>
			 		<thead class="thead">
			 			<tr>
		          <th colspan="2">Контактні дані</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<tr>
		      		<td class="label">Контактні телефони:</td>
		      		<td class="value">
		      			<?php $phones = carbon_get_theme_option('crb_phones');
	              foreach ($phones as $phone): ?>
	                <span><?php echo $phone['crb_phone'] ?> </span>
	              <?php endforeach; ?>
		      		</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Адреси електронної пошти:</td>
		      		<td class="value">
		      			<?php $emails = carbon_get_theme_option('crb_emails');
	              foreach ($emails as $email): ?>
	                <span><?php echo $email['crb_email'] ?> </span>
	              <?php endforeach; ?>
		      		</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Факс:</td>
		      		<td class="value">
		      			<?php $faxes = carbon_get_theme_option('crb_faxes');
	              foreach ($faxes as $fax): ?>
	                <span><?php echo $fax['crb_fax'] ?> </span>
	              <?php endforeach; ?>
		      		</td>
		      	</tr>
		      </tbody>
		    </table>
		  </div>
		  <div class="table-responsive mb-5">
			 	<table>
			 		<thead class="thead">
			 			<tr>
		          <th colspan="2">Серія та номер свідоцтва про державну реєстрацію та запису в ЄДР юридичних осіб та фізичних осіб підприємців</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<tr>
		      		<td class="label">Дата реєстрації:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_registration_date' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">Серія:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_registration_seria' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">Номер:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_registration_number' ); ?></td>
		      	</tr>
		      </tbody>
		    </table>
		  </div>
		  <div class="table-responsive mb-5">
			 	<table>
			 		<thead class="thead">
			 			<tr>
		          <th colspan="2">Свідоцтво Нацфінпослуг або НКЦПФР про реєстрацію фінансової установи</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<tr>
		      		<td class="label">Дата реєстрації:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_registration_two_date' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">Реєстраційний номер:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_registration_two_regnumber' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">Серія свідоцтва:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_registration_two_seria' ); ?></td>
		      	</tr>
		      	<tr>
		      		<td class="label">Номер свідоцтва:</td>
		      		<td class="value"><?php echo carbon_get_the_post_meta( 'crb_registration_two_number' ); ?></td>
		      	</tr>
		      </tbody>
		    </table>
		  </div>
		  <div class="table-responsive">
			 	<table>
			 		<thead class="thead">
			 			<tr>
		          <th colspan="2">Ліцензія</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<tr>
		      		<td>
		      			<?php echo carbon_get_the_post_meta( 'crb_license' ); ?>
		      		</td>
		      	</tr>
		      </tbody>
		    </table>
		  </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>