 const texts = document.getElementById('texts');

 if(texts){
   texts.addEventListener('click', e => {
     if(e.target.className === 'btn btn-danger delete-article'){
       if(confirm('Want to delete?')){
       const id = e.target.getAttribute('data-id');

       fetch(`/text/delete/${id}`, {
       method: 'DELETE'
       }).then(res => window.location.reload());
      }
    }
  });
}
