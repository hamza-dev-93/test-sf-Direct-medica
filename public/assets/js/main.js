var $collectionHolder;

var $addTagButton = $('<br><button type="button" class="btn btn-outline-info btn-sm add_tag_link">Ajouter un affilier a ce contrat</button><br><br>');
var $newLinkLi = $('<li></li>').append($addTagButton);

jQuery(document).ready(function() {
    
    $collectionHolder = $('ul.tags');
    
    $collectionHolder.append($newLinkLi);
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addTagButton.on('click', function(e) {
        // Ajout un nouveau tag 
        addTagForm($collectionHolder, $newLinkLi);
    });
});

function addTagForm($collectionHolder, $newLinkLi) {
    
    var prototype = $collectionHolder.data('prototype');
    var index = $collectionHolder.data('index');
    var newForm = prototype;   
    newForm = newForm.replace(/__name__/g, index);
    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);
    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<li></li>').append(newForm);
     // also add a remove button, just for this example
    $newFormLi.append('<a href="#" class="remove-tag btn btn-danger btn-sm" alt="supprimer ce champ">x</a>');
    $newLinkLi.before($newFormLi);

     // handle the removal, just for this example
    $('.remove-tag').click(function(e) {
        e.preventDefault();
        
        $(this).parent().remove();
        
        return false;
    });
}

// Pour suuprimer mles champs input de  affilies
jQuery(document).ready(function() {
    
    $collectionHolder = $('ul.tags');
    // ajout d un lien de suppression pour chaque tag existant de element li 
    $collectionHolder.find('li').each(function() {
        addTagFormDeleteLink($(this));
    });

    
});

