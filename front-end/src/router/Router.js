import React from 'react'
import { Route, Switch, Redirect } from 'react-router-dom'
import listRoutes, { redirectPage } from './routes'

export default () => {
  return (
    <Switch>
      {listRoutes.map((route, index) => (
        <Route key={index} path={route.path} exact={route.exact} component={route.component} />
      ))}
      <Redirect from='*' to={redirectPage} />
    </Switch>
  )
}
