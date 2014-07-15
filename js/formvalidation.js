  $(document).ready(function(){


    $('#register').on('submit',function(e){
        e.preventDefault();
        validate();

    });
        function validate()
        {
             $('.error').text('');
             var data={};
             $('#register input').each(function(){
                 var value=this.value;
                 var id=$(this).attr('id');
                 switch(id)
                 {
                     case 'FirstName':if($(this).val()=='')
                                         {
                                             $(this).next().text('Поле обязательно для заполнения');
                                         }else
                                     data[id]=value;break;
                     case 'LastName':if($(this).val()=='')
                                         {
                                             $(this).next().text('Поле обязательно для заполнения');
                                         }else
                                     data[id]=value;break;
                     case 'Login':if($(this).val()=='')
                                         {
                                             $(this).next().text('Поле обязательно для заполнения');
                                         }else
                                             data[id]=value;break;
                     case 'email': var reg = /\S+@\S+\.\S+/;
                                     if (!reg.test($(this).val()))
                                     {
                                         $(this).next().text('Не корректный емэйл');
                                     }else
                                    data[id]=value;break;
                     case 'pass' : if($(this).val().length<6 || $(this).val().length>16)
                                     {
                                         $(this).next().text('Не меньше 6 и не больше 16 символов');
                                     }else
                                     data[id]=value;break;
                     case 'repass': if(($(this).val()!=$('#pass').val()) || $(this).val()=='')
                                        {
                                            $(this).next().text('Пароли не совпадают');
                                        }else
                                     data[id]=value;break;
                     case 'date': var dateReg= /[0-9]{4}-[0-9]{2}-[0-9]{2}/;
                                    if (!dateReg.test($(this).val()))
                                    {
                                        $(this).next().text('Введите дату в формате "гггг-мм-дд"');
                                    }else
                                     data[id]=value;break;
                     case 'phone': var phoneReg = /^\+?[0-9]{3}-?[0-9]{7}$/;
                                     if (!phoneReg.test($(this).val()))
                                     {
                                         $(this).next().text('Введите телефон в формате "хxх-ххххххх"');
                                     }else
                                     data[id]=value;break;
                 }

             });
            function count(obj)
            {
                var counter = 0;
                for(var p in obj)
                {
                    counter++;
                }
                return counter;
            }
            if($('#register input').length==count(data))
            {
                $.get("index.php", {json: JSON.stringify(data)}).success(function(result) {
                    $("#error").html(result);
                });
            }


        }

  })
