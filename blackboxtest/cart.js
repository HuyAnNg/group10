describe('', () => {
it('',() => {
cy.visit('https://group10se.000webhostapp.com/cart.php')
})
it('test menu', () =>{
    
    cy.contains('ABOUT').click()
    cy.contains('SERVICES').click()
    cy.contains('CONTACT US').click()
    cy.contains('SHOP NOW').click()
  })

})
