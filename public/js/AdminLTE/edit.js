
// ////////////////// edit buttom  ////////////////////////////////
function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
	
 var name=document.getElementById("name_row"+no);
 var country=document.getElementById("country_row"+no);
 var age=document.getElementById("age_row"+no);
 var turky=document.getElementById("turky_row"+no);


	
 var name_data=name.innerHTML;
 var country_data=country.innerHTML;
 var age_data=age.innerHTML;
 var turky_data=turky.innerHTML;
	
 name.innerHTML="<textarea   id='name_text"+no+"' value='"+name_data+"'>";
 country.innerHTML="<textarea   id='country_text"+no+"' value='"+country_data+"'>";
 age.innerHTML="<textarea   id='age_text"+no+"' value='"+age_data+"'>";
 turky.innerHTML="<textarea   id='turky_text"+no+"' value='"+turky_data+"'>";

}
//////////////////////// save buttom  //////////////////////

function save_row(no)
{
 var name_val=document.getElementById("name_text"+no).value;
 var country_val=document.getElementById("country_text"+no).value;
 var age_val=document.getElementById("age_text"+no).value;
 var turky_val =document.getElementById("turky_text"+no).value;

 

 document.getElementById("name_row"+no).innerHTML=name_val;
 document.getElementById("country_row"+no).innerHTML=country_val;
 document.getElementById("age_row"+no).innerHTML=age_val;
 document.getElementById("turky_row"+no).innerHTML=turky_val;


 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
}
//////////////////////// delet buttom   //////////////////////////
function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}
/////////// //////////add buttom//////////////////////
function add_row()
{
 var new_name=document.getElementById("new_name").value;
 var new_country=document.getElementById("new_country").value;
 var new_age=document.getElementById("new_age").value;
 var new_turky=document.getElementById("new_turky").value;

	
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='name_row"+table_len+"'>"+new_name+"</td><td id='country_row"+table_len+"'>"+new_country+"</td><td id='age_row"+table_len+"'>"+new_age+"</td><td><td id='turky_row"+table_len+"'>"+new_turky+"</td><input type='button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_name").value="";
 document.getElementById("new_country").value="";
 document.getElementById("new_age").value="";
 document.getElementById("new_turky").value="";
 document.getElementById("new_turky").value="";


}