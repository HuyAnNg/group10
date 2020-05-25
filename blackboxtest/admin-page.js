describe('', () => {
it('',() => {
cy.visit('https://group10se.000webhostapp.com/admin-page.php')
})
it('test menu', () =>{
    cy.contains('Adidas').click()
    cy.contains('Nike').click()
    cy.contains('DELETE').click()
    cy.contains('ADD PRODUCT').click()
      })

})
