function isvalido(Field){
  strfield = Field.value;
  var re = new RegExp;
  re = /^([a-zA-Z0-9_\.\-\*])/;
  var arr = re.exec(strfield);
  if (arr == null)
    return(false);
  else
    return(true);
}


function isMail(mailField){
  strMail = mailField.value;
  var re = new RegExp;
  re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var arr = re.exec(strMail);
  if (arr == null)
    return(false);
  else
    return(true);
}

function minLen(txtField, minVal){
  strExp = txtField.value;
  l = strExp.length;
  if (l < minVal)
    return(true);
  else
    return(false);
}

function maxLen(txtField, maxVal){
  strExp = txtField.value;
  l = strExp.length;
  if (l > maxVal)
    return(true);
  else
    return(false);
}

function isBlank(txtField){
  if (txtField.value)
    return (false);
  else
    return(true);
}

function isSelectedZero(txtField){
  selected = txtField.selectedIndex;
  if (selected == 0)
    return(true);
  else
    return(false);
}

function isNumber(txtField){
  numExp = txtField.value;
  if (isNaN(numExp) || (numExp.length == 0))
    return (false);
  else
    return(true);
}

function isCPF(txtField){ 

  var i; 
  s = txtField.value;  
  var c = s.substr(0,9); 
  var dv = s.substr(9,2); 
  var d1 = 0; 
  
  for (i = 0; i < 9; i++){ 
    d1 += c.charAt(i)*(10-i); 
  } 
  
  if (d1 == 0) return false;   
  
  d1 = 11 - (d1 % 11); 
  
  if (d1 > 9) d1 = 0; 
  
  if (dv.charAt(0) != d1) return false; 
  
  d1 *= 2; 
  
  for (i = 0; i < 9; i++){ 
    d1 += c.charAt(i)*(11-i);   
  } 
  
  d1 = 11 - (d1 % 11); 
  
  if (d1 > 9) d1 = 0; 
  
  if (dv.charAt(1) != d1) return false; 
  
  return true; 
  
}
