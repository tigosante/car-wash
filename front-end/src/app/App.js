import { BrowserRouter } from 'react-router-dom'
import Router from '../router/Router'

import './app.css'

export default () => {
  return (
    <BrowserRouter>
      <Router />
    </BrowserRouter>
  )
}
