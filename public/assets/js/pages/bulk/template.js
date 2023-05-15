"use strict";

$('#add-more').on('click', function() {

    var exist_buttons = $('.plain_button_message_text').length;

    exist_buttons == 2 ? $('#add-more').hide() : $('#add-more').show();

    exist_buttons = exist_buttons + 1;

    var button_html = `<div class="plain_button_message_text exist_button${exist_buttons}">
											<div class="form-group">
												<div class="row">
													<div class="col-6">
														<label>Botão ${exist_buttons} Texto</label>
													</div>
													<div class="col-6">
														<a href="javascript:void(0)" data-target=".exist_button${exist_buttons}" class="btn btn-sm btn-danger float-right mb-1 remove-button"><i class="fa fa-trash"></i></a>
													</div>
												</div>
												<input type="text" class="form-control" name="buttons[]"  required="" autofocus="" maxlength="50">
											</div>
										</div>`;

    $('#list-button-appendarea').append(button_html);

});

//remove button from message with button
$(document).on('click', '.remove-button', function() {
    var target = $(this).data('target');
    $(target).remove();

    var exist_buttons = $('.plain_button_message_text').length;
    exist_buttons >= 3 ? $('#add-more').hide() : $('#add-more').show();

});
$('.save-template').on('change',function(){
        var target_action = $(this).data('target');
       
        $(this).is(':checked') ? $(target_action).show() : $(target_action).hide();
    });
$('#add-more-action').on('click', function() {


    var exist_buttons = $('.call-to-action-area').length;

    exist_buttons == 2 ? $('#add-more-action').hide() : $('#add-more-action').show();

    exist_buttons = exist_buttons + 1;

    var button_html = `<div class="card card-primary mt-2 call-to-action-area exist-action${exist_buttons}">
                                                		<div class="card-header">
                                                			<h4>Botão ${exist_buttons}</h4>
                                                			<div class="card-header-action">
                                                			<a href="javascript:void(0)" data-target=".exist-action${exist_buttons}" class="btn btn-sm btn-danger remove-action">
                                                				<i class="fas fa-trash"></i>
                                                			</a>
                                                			</div>
                                                		</div>
                                                		<div class="card-body">
                                                			<div class="form-row">
                                                				<div class="form-group col-sm-4">
                                                					<label>
                                                						Selecione o tipo de ação
                                                					</label>
                                                					<select class="form-control action-type" name="buttons[${exist_buttons}][type]" required="" >
                                                						<option value="urlButton" data-key="${exist_buttons}">Link do Botão</option>
                                                						<option value="callButton" data-key="${exist_buttons}">Telefone (Botão de Chamada)</option>
                                                						<option value="quickReplyButton" data-key="${exist_buttons}">Botão de Resposta Rápida</option>
                                                					</select>
                                                				</div>
                                                				<div class="form-group col-sm-4">
                                                					<label>
                                                						Texto de Exibição do Botão
                                                					</label>
                                                					<input type="text" class="form-control" name="buttons[${exist_buttons}][displaytext]" required="" autofocus="" maxlength="50" placeholder="Texto de Exibição do Botão" />
                                                				</div>
                                                				<div class="form-group col-sm-4 action-area${exist_buttons}">
                                                					<label>
                                                						Link do Botão
                                                					</label>
                                                					<input type="text" class="form-control input_action${exist_buttons}" name="buttons[${exist_buttons}][action]" required="" autofocus="" maxlength="50" placeholder="https://www.google.com/" />
                                                				</div>
                                                			</div>
                                                		</div>
                                                	</div>`;

    $('#action-body').append(button_html);

});

$(document).on('click', '.remove-action', function() {
    var target = $(this).data('target');
    $(target).remove();

    var exist_buttons = $('.button_message_text').length;
    exist_buttons >= 3 ? $('#add-more-action').hide() : $('#add-more-action').show();
});

$(document).on('change','.action-type',function(){
	var key = $(this).children('option:selected').data('key');
	var val = $(this).val();

	val == 'quickReplyButton' ?  $('.action-area'+key).hide() : $('.action-area'+key).show();

	if (val == 'urlButton') {
		$('.input_action'+key).attr('placeholder','https://www.google.com/');
	}
	else if(val == 'callButton'){
		$('.input_action'+key).attr('placeholder','Digite o número de telefone com o código do país');
	}
	else{
		$('.input_action'+key).attr('placeholder','Texto de exemplo');
	}

});


//add more list card
$(document).on('click','#add-more-option',function(){
    const max_card=20;
    const total_exisit_card=$('.card-item').length+1;

    total_exisit_card >= max_card ? $('#add-more-option').hide() : $('#add-more-option').show();


    var card_html=`<div class="card card-primary card-item card-area${total_exisit_card}">
   <div class="card-header">
      <h4>Lista ${total_exisit_card}</h4>
      <div class="card-header-action">
         <a href="javascript:void(0)" class="btn btn-danger btn-sm delete-card" data-target=".card-area${total_exisit_card}">
         <i class="fas fa-trash"></i>
         </a>
      </div>
   </div>
   <div class="card-body">
      <div class="row">
         <div class="col-sm-12">
            <div class="form-group">
               <label>Título da Seção da Lista</label>
               <input  type="text" class="form-control" name="section[${total_exisit_card}][title]" placeholder="Exemplo: Selecione um produto" value="" required=""  maxlength="50" />
            </div>
         </div>
      </div>
      <div class="row list-item-area${total_exisit_card}">
         <div class="col-6">
            <div class="form-group">
               <label>Digite o Nome do Valor da Lista</label>
               <input  type="text" class="form-control itemval-${total_exisit_card}" name="section[${total_exisit_card}][value][1][title]" placeholder="Exemplo: Produto 1" value="" required=""  maxlength="50" />
            </div>
         </div>
         <div class="col-6">
            <div class="form-group">
               <label>Insira a Descrição do Valor da Lista</label>
               <input  type="text" class="form-control" name="section[${total_exisit_card}][value][1][description]" placeholder="Exemplo: Produto 1 está em promoção" value=""   maxlength="50" />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12 text-right">
            <a href="javascript:void(0)" class="text-right btn btn-sm btn-neutral add-more-option-item option-item-btn${total_exisit_card}" data-target=".list-item-area${total_exisit_card}" data-key="${total_exisit_card}"><i class="fas fa-plus"></i>&nbspAdicionar Mais</a>
         </div>
      </div>
   </div>
</div>`;


$('.list-area').append(card_html);
});

//add more list item to the card
$(document).on('click','.add-more-option-item',function(){
    var target = $(this).data('target');
    var key    = $(this).data('key');
    var check_option_item=$('.itemval-'+key).length;
    var option_item_btn=$('.option-item-btn'+key);
    var list_exist_item=$('.item-'+key+'-'+key+1).length;
    if (check_option_item >= 20) {
        $('.option-item-btn'+key).hide();
    }

    var html=`<div class="col-6 item-${key}-${check_option_item+1}">
    <div class="form-group">
        <label>Enter List Value Name</label>
        <input  type="text" class="form-control itemval-${key}" name="section[${key}][value][${check_option_item+1}][title]" placeholder="Exemplo: Produto 1" value="" required=""  maxlength="50" />
    </div>
    </div>
    <div class="col-6 item-${key}-${check_option_item+1}">
        <div class="form-group">
            <label>Enter List Value Description</label>
            <a href="javascript:void(0)" class="float-right btn btn-sm btn-danger remove-option-item" data-addbutton=".option-item-btn${key}" data-target=".item-${key}-${check_option_item+1}">X</a>
            <input  type="text" class="form-control" name="section[${key}][value][${check_option_item+1}][description]" placeholder="Exemplo: Produto 1 está em promoção" value=""   maxlength="50" />
        </div>
    </div>`;

    $(target).append(html);


});

$(document).on('click','.remove-option-item',function(){
    const target_option_item = $(this).data('target');
    const option_item_btn    = $(this).data('addbutton');

    $(target_option_item).remove();
    $(option_item_btn).show();


});

$(document).on('click','.delete-card',function(){

    const selectedTarget=$(this).data('target');
    $(selectedTarget).remove();
});