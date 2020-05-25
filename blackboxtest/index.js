describe('', () => {
it('',() => {
cy.visit('https://group10se.000webhostapp.com/index.php')
})
it('test navigation bar menu', () =>{
    cy.contains('ABOUT').click()
    cy.contains('SERVICES').click()
    cy.contains('CONTACT US').click()
    cy.contains('SHOP NOW').click()
  })

})
