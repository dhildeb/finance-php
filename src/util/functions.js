function loadNewContent(){
 const e = document.getElementById('filter-key')
 const value = e.options[e.selectedIndex].value;
 console.log(value)
 const newForm = document.getElementById('new-form')

 switch (value){
   case 'date_recorded':
     newForm.innerHTML = dateTemplate
     break;
   case 'expense':
     newForm.innerHTML = amountTemplate
     break;
   case 'comment':
     newForm.innerHTML = commentTemplate
     break;
   case 'expense_type':
     newForm.innerHTML = typeTemplate
     break;
    }

}

const dateTemplate = `
<input class="form-control" type="date" name="filter-value" id="filter-value" 
class="form-control" value="<? date('Y-m-d'); ?>">
`
//                              ^^^ date not auto filling

const amountTemplate = `
<input class="form-control" type="number" name="filter-value" id="filter-value" 
class="form-control">
`

const commentTemplate = `
<input class="form-control" type="text" name="filter-value" id="filter-value" 
class="form-control">
`

const typeTemplate = `
<select name="filter-value">  
<option value="" disabled selected>Choose option</option>
<option value="income">income</option>  
<option value="expense">expense</option>  
</select>
`
