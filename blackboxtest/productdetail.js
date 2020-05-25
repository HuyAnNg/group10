describe('', () => {
it('',() => {
cy.visit('https://group10se.000webhostapp.com/productdetail.php')
})
it('test menu', () =>{
    cy.contains('SHOP NOW').click()
    cy.contains('ADD TO CART').click()
    cy.contains('ABOUT').click()
    cy.contains('SERVICES').click()
    cy.contains('CONTACT US').click()
  })

})
