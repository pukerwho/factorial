<?php
/*
Template Name: Main
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
		      		<td class="value">Dva</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Назва компанії:</td>
		      		<td class="value">ss</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Скорочена назва компанії:</td>
		      		<td class="value">asdas</td>
		      	</tr>
		      	<tr>
		      		<td class="label">ПІБ керівника:</td>
		      		<td class="value">asdas</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Головний бухгалтер:</td>
		      		<td class="value">asdasd</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Місто:</td>
		      		<td class="value">ddd</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Поштовий індекс:</td>
		      		<td class="value">ffff</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Місцезнаходження:</td>
		      		<td class="value">adasd</td>
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
		      		<td class="value">sss</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Адреси електронної пошти:</td>
		      		<td class="value">adads</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Факс:</td>
		      		<td class="value">asdd</td>
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
		      		<td class="value">asdd</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Серія:</td>
		      		<td class="value">asdd</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Номер:</td>
		      		<td class="value">asdd</td>
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
		      		<td class="value">asdd</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Реєстраційний номер:</td>
		      		<td class="value">asdd</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Серія свідоцтва:</td>
		      		<td class="value">asdd</td>
		      	</tr>
		      	<tr>
		      		<td class="label">Номер свідоцтва:</td>
		      		<td class="value">asdd</td>
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
		      			Переказ коштів здійснюється на підставі ліцензії НБУ на переказ коштів у національній валюті без відкриття рахунків №52 від 05.12.2016. Надання коштів у позику, в тому числі і на умовах фінансового кредиту, надання послуг з факторингу, надання послуг з фінансового лізингу здійснюється на підставі ліцензії НацКомФінПослуг №1 від 15.06.2018.
		      		</td>
		      	</tr>
		      </tbody>
		    </table>
		  </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>