
import './App.css'

function App() {
  

  return (
    <>
    <div className='main-wrapper'>
     <section className='register-wrapper'>

      <div className='imageWrapper'>
        <img className='backImage' src="/public/back.jpg" alt="" />
      </div>

      <div className='formWrapper'>
        <h1>Create an account</h1>
        <form className='formItem'>
         <div className='names'>
         <input type="text" placeholder='first name' />
         <input type='text' placeholder='second name'/>
         </div>
          <input className='emailInput' type="text" placeholder='email' />
          <input className='passwordInput' type='password' placeholder='password'/>
          <button type='submit'>
            create
          </button>
        </form>

      </div>

      
     </section>
    </div>
  
    </>
  )
}

export default App
