    //Добавление элементов
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function addselect(id,name,select_cheked,class_select){
        var foo = document.getElementById(id);
        
        //Create an input type dynamically.
        var selector = document.createElement('select');
        selector.id = id;
        selector.name = name;
        selector.className='span3';
        foo.appendChild(selector);
        
        var option = document.createElement('option');
        option.value = '0';
        option.appendChild(document.createTextNode('Обыкновенная карта'));
        selector.appendChild(option);
        
        option = document.createElement('option');
        option.value = '1';
        option.appendChild(document.createTextNode('Волшебная карта'));
        selector.appendChild(option);
        
        selector.value=select_cheked;
    };
    function addinput(type,id,name,value,class_input){
        //Create an input type dynamically.
        var doc_name = document.createElement("input");
        
        //Assign different attributes to the element.
        doc_name.setAttribute("type", type);
        doc_name.setAttribute("value", value);
        doc_name.setAttribute("name", name);
        doc_name.setAttribute("class", class_input);
     
     
        var foo = document.getElementById(id);
     
        //Append the element in page (in span).
        foo.appendChild(doc_name);
    };
    //Скрытие, появление
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function add_one(count_global){
        $('#add_one').show();
        $('#add_more').hide();
        $('#delete_cheked').hide();
        $('#add_more_as').hide();
        };
    function add_more(count_global){
        $('#add_one').hide();
        $('#add_more').show();
        $('#delete_cheked').hide();
        $('#add_more_as').hide();
    };
    function delete_cheked(count_global){
        $('#add_one').hide();
        $('#add_more').hide();
        $('#delete_cheked').show();
        $('#add_more_as').hide();
    };
    function add_more_as(count_global){
        $('#add_one').hide();
        $('#add_more').hide();
        $('#delete_cheked').hide();
        $('#add_more_as').show();
    };

    //Функции добавления, удаления и тд
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
    
    function add(count_global,count) {
        for (var i = count_global; i < count_global+count; i++) {
            var div_obi = document.createElement("div");
            div_obi.setAttribute("class", "controls controls-row");
            div_obi.setAttribute("id", i);
            if((document.location.href == 'http://obicardroyting.141592.org/admin/send')||(document.location.href == 'http://obicardroyting.141592.org/admin/index')){
                var form_obi=document.getElementById("table_obi");
                form_obi.appendChild(div_obi);
                var select_cheked=$();
                addinput("checkbox",i,'checkbox'+i,'',"span1");
                addinput("text",i,'id/'+i+'/count_cart','10',"span2");
                addinput("text",i,'id/'+i+'/cart_type','6001',"span3");
                //addselect(i,'id/'+i+'/cart_type',select_cheked,"span3");
                addinput("text",i,'id/'+i+'/additional_information','Filialaussand 715938_003001',"span5");
            }
        }
    };

    function del(id){
        //var del_id = document.getElementById(id);
        var del_id="#"+id;
        $(del_id).empty();
        $(del_id).remove();
    };
    
    function add_more_identic(count_global,count) {
        for (var i = count_global; i < count_global+count; i++) {
            var div_obi = document.createElement("div");
            div_obi.setAttribute("class", "controls controls-row");
            div_obi.setAttribute("id", i);
            var form_obi=document.getElementById("table_obi");
            form_obi.appendChild(div_obi);
            addinput("checkbox",i,'checkbox'+i,'',"span1");
            var count_cart=$('#count_cart').val();
            addinput("text",i,'id/'+i+'/count_cart',count_cart,"span2");
            var cart_type=$('#cart_type').val();
            addinput("text",i,'id/'+i+'/cart_type',cart_type,"span3");
            var additional_information=$('#additional_information').val();
            addinput("text",i,'id/'+i+'/additional_information',additional_information,"span5");
        }
    };

