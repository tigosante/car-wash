import userRouter from '../modules/collaborator/router'
import serviceRouter from '../modules/service/router'
import dashBoardRouter from '../modules/dashBoard/router'
import typeServiceRouter from '../modules/typeService/router'
import collaboratorRouter from '../modules/collaborator/router'

let listRoutes = [...userRouter, ...serviceRouter, ...dashBoardRouter, ...typeServiceRouter, ...collaboratorRouter]

export default listRoutes
export const redirectPage = '/'
