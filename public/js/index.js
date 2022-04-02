$(document).ready(function(){
    $("#btn_ajout").click(function(){
        $('form')
        .form({
          fields: {
            nomProjet: {
              identifier: 'name',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your name'
                }
              ]
            },
            dateDebut: {
              identifier: 'dateDebut',
              rules: [
                {
                  type   : 'minCount[2]',
                  prompt : 'Please select at least two skills'
                }
              ]
            },
            dateFin: {
              identifier: 'dateFin',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please select a gender'
                }
              ]
            },
            descr: {
              identifier: 'descr',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter a username'
                }
              ]
            }  
          }
        })
      ;  
    });
  });
 
