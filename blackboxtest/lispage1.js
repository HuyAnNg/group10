describe('Navigation bar test', () =>{
  it('go to homepage', () =>{
    cy.visit('https://group10se.000webhostapp.com/listpage1.php')
  })
  it('test navigation bar menu', () =>{
    cy.contains('CATEGORIES').click()
    cy.contains('Adidas').click()
    cy.contains('Nike').click()
    cy.contains('Log In as Admin?').click()
  })

})
